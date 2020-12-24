<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\Wallet;
use App\WithdrawalInterval;
use Livewire\Component;

class WithdrawalComponent extends Component
{
    public $amount;
    public $walletAddress, $errorMessage, $successMessage, $referralErrorMessage, $referralSuccessMessage;
    public $referralWalletAddress, $referralAmount;

    public function withdrawFromMainWallet()
    {
        //MAKE WITHDRAW HERE
        $user_wallet = Wallet::where('user_id', auth()->user()->id)->first();
        // dd($request->amount);
        if ($this->amount < 10) {
            $this->errorMessage = 'Error: Amount to withdraw must be more than $10';
            $this->resetField();
            return;
        }


        if ($user_wallet->balance < $this->amount) {
            $this->errorMessage = 'Error: Insufficient amount in wallet';
            $this->resetField();

            return;
        } else {

            // $user_wallet->balance = $user_wallet->balance - $this->amount;
            // $user_wallet->total_withdraw = $user_wallet->total_withdraw + $this->amount;
            // $user_wallet->save();
            $transactions = Transaction::create([
                'user_id' => auth()->user()->id,
                'wallet_address' => $this->walletAddress,
                'transaction_type' => 'Withdraw',
                'amount' => $this->amount,
                'withdraw_type' => 'main_wallet',
                'status' => false
            ]);
            $this->successMessage = 'Your Withdrawer was Successful';

            $this->resetField();
        }
    }

    public function withdrawFromReferralWallet()
    {

        $withdraw = Wallet::where('user_id', auth()->user()->id)->first();



        if ($this->referralAmount < 10) {
            $this->referralErrorMessage = 'Error: Amount to withdraw must be $10 upward.';
            $this->resetField();
            return;
        }

        if ($this->referralAmount <= $withdraw->referral_balance) {
            $transactions = Transaction::create([
                'user_id' => auth()->user()->id,
                'wallet_address' => $this->referralWalletAddress,
                'transaction_type' => 'Withdraw',
                'amount' => $this->amount,
                'withdraw_type' => 'referral_bonus',
                'status' => false
            ]);

            $this->referralSuccessMessage = 'Withdraw from Referral Earning was Successful.';
            $this->resetField();
            return;
        } else {
            $this->referralErrorMessage = 'Error: Insufficient amount in Referral wallet';
            $this->resetField();
            return;
        }
    }

    public function resetField()
    {
        $this->amount = '';
        $this->walletAddress = '';
        $this->referralWalletAddress = '';
        $this->referralAmount = '';
    }

    public function render()
    {
        $userWithdrawlInterval = WithdrawalInterval::where('user_id', auth()->id())->first();

        return view('livewire.withdrawal-component', compact('userWithdrawlInterval'));
    }
}