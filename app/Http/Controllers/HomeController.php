<?php

namespace App\Http\Controllers;

use App\AnnualProfit;
use App\Investment;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Flash;
use App\InvestmentWallet;
use App\ReferralBonusPercentage;
use App\WithdrawalInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash as FlashFlash;
use Illuminate\Validation\Rule;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collection = Wallet::all();

        $totalUsersDeposit = $collection->sum(function($item) {
            return $item->total_deposit;
        });

        $totalUsersWithdrawal = $collection->sum(function($item) {
            return $item->total_withdraw;
        });
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();

        $total_withdraw = $wallet->total_withdraw;

        $users_on_basic = Wallet::where('investment_plan_id', 1)->get()->count();
        $users_on_sliver = Wallet::where('investment_plan_id', 2)->get()->count();
        $users_on_gold = Wallet::where('investment_plan_id', 3)->get()->count();
        $users_on_diamond = Wallet::where('investment_plan_id', 4)->get()->count();
        $users_on_CFIIBs = Wallet::where('investment_plan_id', 0)->get()->count();

        $pending_transactions = Transaction::where('status', false)->get()->count();
        $confirm_transactions = Transaction::where('status', true)->get()->count();

        // get total referrals under a particular user
        $auth_user = User::findOrFail(auth()->id());

        $children = $auth_user->children()->count();
        $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;
        $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;
        $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;
        $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;

        $miniAnnualPercentage = AnnualProfit::findOrFail(1)->percentage;
        $standardAnnualPercentage = AnnualProfit::findOrFail(2)->percentage;
        $premiumAnnualPercentage = AnnualProfit::findOrFail(3)->percentage;
        $premiumAnnualProPercentage = AnnualProfit::findOrFail(4)->percentage;

        if (auth()->user()->role_id == 2) {
            // check to see if the user has pick a user duration
            $withdrawalInterval = WithdrawalInterval::where('user_id', auth()->id())->first();
    
            if ($withdrawalInterval){
                $status = false;
                $withdrawalInterval = withdrawalInterval::where('user_id', auth()->id())->first()->interval;            
            } else {
               $status = true;
            }
    
        } else {
            $status = false;
             $withdrawalInterval = [];
        }
        
        


        $registered_users = User::all()->count();
        return view('dashboard.index')
            ->with([
                'wallet' => $wallet,
                'status' => $status,
                'total_withdraw' => $total_withdraw,
                'registered_users' => $registered_users,
                'users_on_basic' => $users_on_basic,
                'users_on_sliver' => $users_on_sliver,
                'users_on_gold' => $users_on_gold,
                'users_on_diamond' => $users_on_diamond,
                'pending_transactions' => $pending_transactions,
                'confirm_transactions' => $confirm_transactions,
                'children' => $children,
                'miniPercentage' => $miniPercentage,
                'standardPercentage' => $standardPercentage,
                'premiumPercentage' => $premiumPercentage,
                'premiumProPercentage' => $premiumProPercentage,
                'miniAnnualPercentage' => $miniAnnualPercentage,
                'standardAnnualPercentage' => $standardAnnualPercentage,
                'premiumAnnualPercentage' => $premiumAnnualPercentage,
                'premiumAnnualProPercentage' => $premiumAnnualProPercentage,
                'withdrawalInterval'=> $withdrawalInterval,
                'users_on_CFIIBs' => $users_on_CFIIBs,
                'totalUsersDeposit' => $totalUsersDeposit,
                'totalUsersWithdrawal' => $totalUsersWithdrawal
            ]);
    }

    public function account()
    {
        $user = User::find(auth()->user()->id);
        $wallet = $user->wallets()->first();

        return view('dashboard.wallet', ['user' => $user, 'wallet' => $wallet]);
    }




    public function updateProfile()
    {
        return view('dashboard.update-profile');
    }

    public function storeUpdatedProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $this->validate($request, [
            'username' => ['required', 'string', 'alpha_dash', Rule::unique('users')->ignore($user)],
        ]);


        $user->phone_no = $request->phone_no;


       
        $user->name = $request->name;
        $user->username = $request->username;
      
     
        $user->save();

        Flash::success('Profile Update was Successful');
        return redirect()->back();
    }



    public function withdraw()
    {
        // $userWithdrawlInterval = WithdrawalInterval::where('user_id', auth()->id())->first();
        // $my_wallet_addresses = Account::where('user_id', auth()->user()->id)->get();
        // $wallet = Wallet::with('users')->where('user_id', auth()->user()->id)->first();
        return view(
            'dashboard.holla',
            
        );
    }

    public function makeWithdraw(Request $request)
    {
        $this->validate($request, [
            'amount' => ['required', 'numeric']
        ]);
        //MAKE WITHDRAW HERE
        $user_wallet = Wallet::where('user_id', auth()->user()->id)->first();
        // dd($request->amount);
        if ($request->amount < 10) {
            Flash::error('Error: Amount to withdraw must be more than $10');
            return redirect()->back();
        }


        if ($user_wallet->balance < $request->amount) {
            Flash::error('Error: Insufficient amount in wallet');


            return redirect()->back();
        } else {
            // $user_wallet->balance = $user_wallet->balance - $request->amount;
            // $user_wallet->total_withdraw = $user_wallet->total_withdraw + $request->amount;
            // $user_wallet->save();

            $transactions = Transaction::create([
                'user_id' => auth()->user()->id,
                'wallet_address' => $request->wallet_address,
                'transaction_type' => 'Withdraw',
                'amount' => $request->amount,
                'withdraw_type' => 'main_wallet',
                'status' => false
            ]);

            Flash::success('Your Withdrawer was Successful');

            return redirect()->back();
        }
    }

    public function withdrawBonus(Request $request)
    {
        $this->validate($request, [
            'amt' => ['required', 'numeric'],
        ]);

        $withdraw = Wallet::where('user_id', auth()->user()->id)->first();
        // dd($withdraw->referral_balance);
        // CHECK IF AMOUNT IS INSUFFICIENT


        if ($request->amt < 10) {
            Flash::error('Error: Amount to withdraw must be $10 upward.');

            return redirect()->back();
        }

        if ($request->amt <= $withdraw->referral_balance) {
            $transactions = Transaction::create([
                'user_id' => auth()->user()->id,
                'wallet_address' => $request->wallet_address,
                'transaction_type' => 'Withdraw',
                'amount' => $request->amt,
                'withdraw_type' => 'referral_bonus',
                'status' => false
            ]);

            Flash::success('Withdraw from Referral Earning was Successful.');

            return redirect()->back();
        }
    }
}