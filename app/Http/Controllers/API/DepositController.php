<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Laracasts\Flash\Flash;
use App\Models\Wallet;
use App\User;


class DepositController extends Controller
{
    public function uploadProof(Request $request)
    {
        dd($request->hasFile('image'));
    }
   
   
      public function store(Request $request)
    {
        // CHECK IF  WALLET ADDRESS DETAILS FROM ACCOUNT TABLE EXISTS
        // $my_wallet_address = Account::where('user_id', $request->id)->first();

        // if ($my_wallet_address == null) {
        //     Flash::error('Error: Please create your wallet address first');
        //     return redirect()->back();
        // }

       $my_wallet = Wallet::where('user_id', $request->id)->first()->balance;


        //  CHECK IF AMONUT IS IN THE RANGE OF MINI PLAN
        if ($request->amount >= 100 && $request->amount < 1000) {
            $investment_plan_id = 1;
        }

        //  CHECK IF AMONUT IS IN THE RANGE OF STANDARD PLAN
        elseif ($request->amount >= 1000 && $request->amount < 10000) {
            $investment_plan_id = 2;
        }

            //  CHECK IF AMONUT IS IN THE RANGE OF PREMIUM PLAN
        elseif ($request->amount >= 10000 && $request->amount < 100000){
            $investment_plan_id = 3;
        }
        //  CHECK IF AMONUT IS IN THE RANGE OF PREMIUM PRO PLAN
        elseif ($request->amount > 100000) {
            $investment_plan_id = 4;
        }
      
      
        else {
            Flash::error('Error: Amount to invest is too small');
            return redirect()->back();
        }


        // TRANSATIONS
        $transaction = Transaction::create([
            'user_id' => $request->id,
            'investment_plan_id' => $investment_plan_id,
            'transaction_type' => 'Deposit',
            'amount' => $request->amount,
            'status' => false
        ]);



        Flash::success('Congratulation Your Deposit was successfull! Wait for confirmation');

        return response()->json([
            'message' => 'Congratulation Your Deposit was successfull! Wait for confirmation'
        ]);
    }
}