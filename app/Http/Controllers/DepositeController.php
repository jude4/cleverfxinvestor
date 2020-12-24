<?php

namespace App\Http\Controllers;

use App\AnnualProfit;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\Wallet;
use App\ReferralBonusPercentage;
use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class DepositeController extends Controller
{



    public function index()
    {

        // Get Admin Wallet address details
        $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;
        $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;
        $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;
        $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;

        $miniAnnualPercentage = AnnualProfit::findOrFail(1)->percentage;
        $standardAnnualPercentage = AnnualProfit::findOrFail(2)->percentage;
        $premiumAnnualPercentage = AnnualProfit::findOrFail(3)->percentage;
        $premiumAnnualProPercentage = AnnualProfit::findOrFail(4)->percentage;



        $company_wallets = Account::all();
        return view('deposite.index', [
            'company_wallets' => $company_wallets,
            'miniPercentage' => $miniPercentage,
            'standardPercentage' => $standardPercentage,
            'premiumPercentage' => $premiumPercentage,
            'premiumProPercentage' => $premiumProPercentage,
            'miniAnnualPercentage' => $miniAnnualPercentage,
            'standardAnnualPercentage' => $standardAnnualPercentage,
            'premiumAnnualPercentage' => $premiumAnnualPercentage,
            'premiumAnnualProPercentage' => $premiumAnnualProPercentage,

        ]);
    }

    public function show()
    {
        //
    }


    public function store(Request $request)
    {
        // CHECK IF  WALLET ADDRESS DETAILS FROM ACCOUNT TABLE EXISTS


        //    $my_wallet = Wallet::where('user_id', $request->id)->first()->balance;




        //  CHECK IF AMONUT IS IN THE RANGE OF MINI PLAN
        if ($request->amount >= 100 && $request->amount <= 999) {
            $investment_plan_id = 1;
        }

        //  CHECK IF AMONUT IS IN THE RANGE OF STANDARD PLAN
        elseif ($request->amount >= 1000 && $request->amount <= 9999) {
            $investment_plan_id = 2;
        }

        //  CHECK IF AMONUT IS IN THE RANGE OF PREMIUM PLAN
        elseif ($request->amount >= 10000 && $request->amount <= 99999) {
            $investment_plan_id = 3;
        }
        //  CHECK IF AMONUT IS IN THE RANGE OF PREMIUM PRO PLAN
        elseif ($request->amount >= 100000) {
            $investment_plan_id = 4;
        } else {
            Flash::error('Error: Amount to invest is too small');
            return redirect()->back();
        }


        // TRANSATIONS
        $transaction = Transaction::create([
            'user_id' => $request->id,
            'investment_plan_id' => $investment_plan_id,
            'transaction_type' => 'Deposit',
            'wallet_address' => $request->wallet_address,
            'amount' => $request->amount,
            'status' => false
        ]);



        Flash::success('Congratulation Your Deposit was successfull! Wait for confirmation');

        return response()->json([
            'message' => 'Congratulation Your Deposit was successfull! Wait for confirmation'
        ]);
    }

    public function uploadPaymentProof(Request $request)
    {

        if ($request->id) {
            $my_transaction = Transaction::find($request->id);

            // Check if its a file
            if ($request->hasFile('payment_proof')) {
                // Get filename with extension
                $filenameWithExt = $request->file('payment_proof')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                // Get just ext
                $extension = $request->file('payment_proof')->getClientOriginalExtension();
                // Filename to store
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                //upload image
                $path = $request->file('payment_proof')->StoreAs('/payment_proof', $filenameToStore);
            } else {
                $filenameToStore = 'noimage.png';
            }

            $my_transaction->payment_proof = $filenameToStore;

            $my_transaction->save();

            Flash::success('Successful, Please wait for confirmation from Administrator');
        } else {



            $my_transaction = Transaction::where('user_id', auth()->user()->id)->get()->last();

            if (!$my_transaction) {
                Flash::error('!Opps Something went wrong');

                return redirect()->back();
            }

            // Check if its a file
            //   if ($request->hasFile('payment_proof')) {
            //      // Get filename with extension
            //      $filenameWithExt = $request->file('payment_proof')->getClientOriginalName();
            //      //Get just filename
            //      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //      // Get just ext
            //      $extension = $request->file('payment_proof')->getClientOriginalExtension();
            //      // Filename to store
            //      $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //      //upload image
            //      $path = $request->file('payment_proof')->StoreAs('/payment_proof', $filenameToStore);
            //  } else {
            //      $filenameToStore = 'noimage.png';
            //  }
            $payment_proof = request('payment_proof') ? request('payment_proof')->store('payment_proof') : null;


            $my_transaction->payment_proof = $payment_proof;
            $my_transaction->save();

            Flash::success('Successful, Please wait for confirmation from Administrator');
        }

        return redirect()->back();
    }
}