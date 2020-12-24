<?php

namespace App\Http\Controllers;

use App\BonusTransactionHistory;
use App\DownlineReferralBonusPercentage;
use App\Http\Requests\CreateTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Repositories\TransactionRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Response;
use App\Models\Account;
use App\Models\Wallet;
use App\Notifications\PaymentConfirmationSuccessful;
use App\Notifications\WithdrawalConfirmationSuccessful;
use App\ReferralBonusPercentage;
use App\Track;
use App\WithdrawalInterval;
use Carbon\Carbon;

class TransactionController extends AppBaseController
{
    /** @var  TransactionRepository */
    private $transactionRepository;

    public function __construct(TransactionRepository $transactionRepo)
    {
        $this->transactionRepository = $transactionRepo;
    }

    public function status(Request $request, $status)
    {

        $transaction = Transaction::find($status);

        if ($transaction->status == false && $transaction->transaction_type != 'Withdraw' && $transaction->transaction_type == 'Deposit') {
            $my_wallet = Wallet::where('user_id', $transaction->user_id)->first()->balance;



            $my_wallet = Wallet::where('user_id', $transaction->user_id)->first();
            $my_wallet->balance = $my_wallet->balance + $transaction->amount;
            $my_wallet->investment_plan_id = $transaction->investment_plan_id;
            $my_wallet->save();

            $user = User::find($transaction->user_id);
            // $user->withdraw_until = now()->addDays(config('app.withdraw_days_left'));
            $user->save();

            $updatInvestmentPlan = Wallet::where('user_id', $transaction->user_id)->first();
            $updatInvestmentPlan->investment_plan_id = $transaction->investment_plan_id;
            $updatInvestmentPlan->save();
            $transaction->status = !false;
           


            // get the user parent
            $parent = $user->parent;

            if ($parent != null) {

                //   check the parent current investment plan
                $parent_wallet = Wallet::where('user_id', $parent->id)->first();

                $current_plan = $parent_wallet->investment_plan_id;

                // calcuate the percentage base on the parent investment plan and then assigned the referral bonus
                $this->calculatePercentageBaseonAccountType($parent_wallet, $current_plan, $transaction, $user);


                // check for grand parent of the user
                $grandParent = $parent->parent;

                if ($grandParent != null) {
                    // get the parent close siblings
                    $parentCloseSiblings = $user->closeSiblings($parent);
                    // check if the close siblings complete 3
                    if ($parentCloseSiblings != null) {
                        
                        if ($user->totalCloseSiblings($parent) == 2) {
                            // check for the position of the user
                            $userPosition = $parent->position($parent) + 1;
    
                            $this->calculatePercentageBaseonPosition($user, $userPosition, $transaction, $parent);
                        }
                    }
                }
            }


            // if it does complete 2
            // calacuate the percentage for the user parent which is based on the current account type of the parent
            // check if the user is the first or second or third position with the close siblings
            // if first position
            // calcuate downline percentage of the deposit of the user (for now is 10%)
            //  assign 5% to the parent of the user downline wallet
            // the second siblings get 3% downline wallet
            // the third siblings get 2% downline wallet

            // if second position
            // assign 3% to the parent of the user downline wallet
            // the first siblingd get 5% downline wallet
            // the third siblings get 2% downline wallet
            // if third position
            // assign 2% to the parent of the user downline wallet
            // the first siblings get 3% downline wallet
            // the second siblings get 5% downline wallet



            $wallet = Wallet::where('user_id', $user->id)->first();
            $wallet->total_deposit = $wallet->total_deposit + $transaction->amount;
            $wallet->save();

            // check if user has a withdrawal interval from the withdrawal interval table
            // if yes then get the interval choosen by the user
            $userWithdrawalInterval = WithdrawalInterval::where('user_id', $user->id)->first();

            if ($userWithdrawalInterval != null) {
                $userInterval = $userWithdrawalInterval->interval;
                
                if ($userInterval == 7) {
                    $userWithdrawalInterval->start_date = Carbon::now();
                    $userWithdrawalInterval->end_date = Carbon::now()->addWeeks(1);

                    $userWithdrawalInterval->save();
                }

                if ($userInterval == 14) {
                    $userWithdrawalInterval->start_date = Carbon::now();
                    $userWithdrawalInterval->end_date = Carbon::now()->addWeeks(14);

                    $userWithdrawalInterval->save();
                }

                if ($userInterval == 30) {
                    $userWithdrawalInterval->start_date = Carbon::now();
                    $userWithdrawalInterval->end_date = Carbon::now()->addMonth();

                    $userWithdrawalInterval->save();
                }
            }
             
            $transaction->save();
            // Notify user of the successful confimation of their deposit
            $user->notify(new PaymentConfirmationSuccessful($user));
            // Notification::send($user, new PaymentConfirmationSuccessful());

            Flash::success('Payment Confirmation Successful');
            return redirect()->back();
        } else {

            if ($transaction->transaction_type == 'Withdraw' && $transaction->withdraw_type == 'main_wallet') {
                $my_wallet = Wallet::where('user_id', $transaction->user_id)->first();


                $my_wallet->balance =  $my_wallet->balance - $transaction->amount;

                $my_wallet->total_withdraw = $my_wallet->total_withdraw + $transaction->amount;

                $my_wallet->save();

                $transaction->status = !false;
                $transaction->save();

                $user = User::findOrFail($transaction->user_id);
                $balance = $transaction->amount;
                
                $user->notify(new WithdrawalConfirmationSuccessful($user, $balance));

                Flash::success('Withdrawal Confirmation Successful');

                return redirect()->back();
            }
        }
    }

    public function calculatePercentageBaseonPosition($user, $userPosition, $transaction, $parent)
    {
        
        // calcuate total percentage for downline which is 10% for now
        $totalPercentage = DownlineReferralBonusPercentage::findorFail(5)->percentage;

        $total = ($totalPercentage / 100) * $transaction->amount;

        // five percentage calacuation of the total percentage
        $fivePercentParent = DownlineReferralBonusPercentage::findOrFail(1)->percentage;
        $fivePercent = ($fivePercentParent / 100) * $total;
        $parentPercent = ($fivePercent / 100) * $transaction->amount;

        //  five Percent calcuation for Sibling of the total percentage
        $fivePercentSibling = DownlineReferralBonusPercentage::find(2)->percentage;
        $fiveSiblingPercent = ($fivePercentSibling / 100) * $total;
        $siblingFivePercent = ($fiveSiblingPercent / 100) * $transaction->amount;

        //  three Percent calcuation for Sibling of the total percentage
        $threePercentSibling = DownlineReferralBonusPercentage::find(3)->percentage;
        $threePercent = ($threePercentSibling / 100) * $total;
        $siblingThreePercent = ($threePercent / 100) * $transaction->amount;

        //  two Percent calcuation for Sibling of the total percentage
        $twoPercentSibling = DownlineReferralBonusPercentage::find(4)->percentage;
        $twoPercent = ($twoPercentSibling / 100) * $total;
        $siblingTwoPercent = ($twoPercent / 100) * $transaction->amount;

        // if user position is equal 1
        if ($userPosition == 1) {
            // assign 5% to the grand parent of the user downline wallet
            $grandParent = $parent->parent;
            $parentWallet = Wallet::where('user_id', $grandParent->id)->first();

            $parentWallet->overflow_wallet = $parentWallet->overflow_wallet + $fivePercentParent;
            $parentWallet->save();

            // recored the overflow of the parent bonus in the bonus transaction history
            BonusTransactionHistory::create([
               'reciever_id' => $parentWallet->user_id,
               'payer_id' => $user->id,
               'overflow_bonus' => $fivePercentParent, 
            ]);

            // get the user first siblings 
            $firstSibling = $user->closeSiblings($parent)->first();
            // assign 3% to the first siblings
            $firstSiblingDownlineWallet = Wallet::where('user_id', $firstSibling->id)->first();

            $firstSiblingDownlineWallet->overflow_wallet = $firstSiblingDownlineWallet->overflow_wallet + $siblingThreePercent;
            $firstSiblingDownlineWallet->save();

            // record the overflow wallet for the first siblings in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $firstSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingThreePercent
            ]);

            // get the user second siblings
            $secondSibling = $user->closeSiblings($parent)->last();
            // assign 3% to the first siblings
            $secondSiblingDownlineWallet = Wallet::where('user_id', $secondSibling->id)->first();

            $secondSiblingDownlineWallet->overflow_wallet = $secondSiblingDownlineWallet->overflow_wallet + $siblingTwoPercent;
            $secondSiblingDownlineWallet->save();

            // record the overflow wallet for the second siblings in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $secondSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingTwoPercent
            ]);
        }

        // if user position is eaqual 2
        if ($userPosition == 2) {
            // assign 5% to first sibling downline wallet
            // get the user first siblings 
            $firstSibling = $user->closeSiblings($parent)->first();
            // assign 5% to the first siblings
            $firstSiblingDownlineWallet = Wallet::where('user_id', $firstSibling->id)->first();
            $firstSiblingDownlineWallet->overflow_wallet = $firstSiblingDownlineWallet->overflow_wallet + $siblingFivePercent;
            $firstSiblingDownlineWallet->save();

            // record the overflow wallet for the first siblings in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $firstSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingFivePercent
            ]);
            

            // assign 3% to the parent of the user downline wallet
            // assign 5% to the parent of the user downline wallet
            $grandParent = $parent->parent;
            $parentWallet = Wallet::where('user_id', $grandParent->id)->first();

            $parentWallet->overflow_wallet = $parentWallet->overflow_wallet + $siblingThreePercent;
            $parentWallet->save();

            // record the overflow wallet for the parent in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $parentWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingThreePercent
            ]);

            // get the user second siblings
            $secondSibling = $user->closeSiblings($parent)->last();
            // assign 2% to the second siblings
            $secondSiblingDownlineWallet = Wallet::where('user_id', $secondSibling->id)->first();

            $secondSiblingDownlineWallet->overflow_wallet = $secondSiblingDownlineWallet->overflow_wallet + $siblingTwoPercent;
            $secondSiblingDownlineWallet->save();

            // record the overflow wallet for the second sibling in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $secondSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingTwoPercent
            ]);

        }

        // if user position is eaqual 3
        if ($userPosition == 3) {
            // get the user first siblings 
            $firstSibling = $user->closeSiblings($parent)->first();
            // assign 5% to the first siblings
            $firstSiblingDownlineWallet = Wallet::where('user_id', $firstSibling->id)->first();
            $firstSiblingDownlineWallet->overflow_wallet = $firstSiblingDownlineWallet->overflow_wallet + $siblingThreePercent;
            $firstSiblingDownlineWallet->save();

            // record the overflow wallet for the first sibling in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $firstSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingThreePercent
            ]);

            // assign 5% to second siblings
            // get the user second siblings
            $secondSibling = $user->closeSiblings($parent)->last();

            $secondSiblingDownlineWallet = Wallet::where('user_id', $secondSibling->id)->first();

            $secondSiblingDownlineWallet->overflow_wallet = $secondSiblingDownlineWallet->overflow_wallet + $siblingFivePercent;
            $secondSiblingDownlineWallet->save();

            // record the overflow wallet for the second sibling in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $secondSiblingDownlineWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingFivePercent
            ]);

            // assign 2% to the grandparent
            $grandParent = $parent->parent;
            $parentWallet = Wallet::where('user_id', $grandParent->id)->first();
            $parentWallet->overflow_wallet = $parentWallet->overflow_wallet + $siblingTwoPercent;
            $parentWallet->save();

            // record the overflow wallet for the parent in bonus transaction history
            BonusTransactionHistory::create([
                'reciever_id' => $parentWallet->user_id,
                'payer_id' => $user->id,
                'overflow_bonus' => $siblingTwoPercent
            ]);
        }
    }

    public function calculatePercentageBaseonAccountType($parent_wallet, $current_plan, $transaction, $payer)
    {
        // calcuate percentage for CFIIBs
        if ($current_plan == 0) {
            // 10%

            $cfiibsPercentage = ReferralBonusPercentage::findOrFail(5)->percentage;

            $bonus = ($cfiibsPercentage / 100) * $transaction->amount;

            $parent_wallet->referral_balance = $parent_wallet->referral_balance + $bonus;

            $parent_wallet->save();

            // save the parent transaction as referral bonus in the bonus transaction history table 
            BonusTransactionHistory::create([
                'reciever_id' => $parent_wallet->user_id,
                'payer_id' => $payer->id,
                'referral_bonus' => $bonus
            ]);
            
        }
        
        // calacuate percentage for mini plan
        if ($current_plan == 1) {
            //5%

            $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;

            $bonus =  ($miniPercentage / 100) * $transaction->amount;

            $parent_wallet->referral_balance = $parent_wallet->referral_balance + $bonus;

            $parent_wallet->save();

            // save the parent transaction as referral bonus in the bonus transaction history table 
           BonusTransactionHistory::create([
                'reciever_id' => $parent_wallet->user_id,
                'payer_id' => $payer->id,
                'referral_bonus' => $bonus
            ]);
        }
        // calcuate percentage for standard plan
        if ($current_plan == 2) {
            //10%
            $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;

            $bonus = $transaction->amount * ($standardPercentage / 100);
            $parent_wallet->referral_balance = $parent_wallet->referral_balance + $bonus;

            $parent_wallet->save();
            // save the parent transaction as referral bonus in the bonus transaction history table 
            BonusTransactionHistory::create([
                'reciever_id' => $parent_wallet->user_id,
                'payer_id' => $payer->id,
                'referral_bonus' => $bonus
            ]);
        }

        // calcuate percentage for premium plan

        if ($current_plan == 3) {
            //12%
            $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;

            $bonus = $transaction->amount * ($premiumPercentage / 100);
            $parent_wallet->referral_balance = $parent_wallet->referral_balance + $bonus;

            $parent_wallet->save();

            // save the parent transaction as referral bonus in the bonus transaction history table 
            BonusTransactionHistory::create([
                'reciever_id' => $parent_wallet->user_id,
                'payer_id' => $payer->id,
                'referral_bonus' => $bonus
            ]);
        }

        // calculate percentage for pro premium plan

        if ($current_plan == 4) {
            //15% 
            $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;

            $bonus = $transaction->amount * ($premiumProPercentage / 100);
            $parent_wallet->referral_balance = $parent_wallet->referral_balance + $bonus;

            $parent_wallet->save();

            // save the parent transaction as referral bonus in the bonus transaction history table 
            BonusTransactionHistory::create([
                'reciever_id' => $parent_wallet->user_id,
                'payer_id' => $payer->id,
                'referral_bonus' => $bonus
            ]);
        }
    }

    public function index(Request $request)
    {
        // $transactions = $this->transactionRepository->all();
        $company_wallet_address = Account::where('user_id', 1)->first()->wallet_address;
        if (auth()->user()->role_id == 1) {

            $users = Transaction::with('users')->latest()->paginate(10);
        } else {
            $users = Transaction::with('users')->where('user_id', auth()->user()->id)->latest()->paginate(10);
        }

        return view('transactions.index')
            ->with(['users' => $users, 'company_wallet_address' => $company_wallet_address]);
    }

    /**
     * Show the form for creating a new Transaction.
     *
     * @return Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created Transaction in storage.
     *
     * @param CreateTransactionRequest $request
     *
     * @return Response
     */
    public function store(CreateTransactionRequest $request)
    {
        $input = $request->all();

        $transaction = $this->transactionRepository->create($input);

        Flash::success('Transaction saved successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Display the specified Transaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $transaction = $this->transactionRepository->find($id);
        $transaction = Transaction::with('users')->find($id);
        $company_wallet_address = Account::where('user_id', 1)->first()->wallet_address;

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.show')->with(['transaction' => $transaction, 'company_wallet_address' => $company_wallet_address]);
    }

    /**
     * Show the form for editing the specified Transaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.edit')->with('transaction', $transaction);
    }

    /**
     * Update the specified Transaction in storage.
     *
     * @param int $id
     * @param UpdateTransactionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransactionRequest $request)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        $transaction = $this->transactionRepository->update($request->all(), $id);

        Flash::success('Transaction updated successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Remove the specified Transaction from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        $this->transactionRepository->delete($id);

        Flash::success('Transaction deleted successfully.');

        return redirect(route('transactions.index'));
    }
}