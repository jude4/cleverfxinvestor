<?php

namespace App\Http\Controllers;

use App\InvestmentWallet;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash as FlashFlash;

class TransferFundController extends Controller
{
   
    public function index()
    {
        return redirect(route('transfer-funds.create'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userWallet = Wallet::where('user_id', auth()->id())->first();

        return view('transfer.create', compact('userWallet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'amount' => 'required|integer',
            'transfer_to' => 'required',
            'transfer_from' => 'required'
        ]);

        

        $wallet = Wallet::where('user_id', auth()->id())->first();

        // get the transfer to and transfer from
        $transferFrom = $request->transfer_from;
        $transferTo = $request->transfer_to;

        if ($transferFrom == $transferTo) {
            Flash::error('Error: you can not transfer fund to the same wallet');

            return back();
        }
        
        // check if the amount is lesser than the transfer to and the transfer from
        if ($transferFrom == 'investment_wallet') {
            if ($wallet->investment_balance >= $request->amount && $wallet->investment_balance != 0) {
                $wallet->investment_balance = $wallet->investment_balance - $request->amount;
                
                $this->transferTo($transferTo, $wallet, $request->amount);
                $wallet->save();
            } else {
                Flash::error('Insufficient amount to transfer');
                return back();
            }
        }

        if ($transferFrom == 'cfi_wallet') {
            if ($wallet->balance >= $request->amount && $wallet->balance != 0) {
                $wallet->balance = $wallet->balance - $request->amount;
                $this->transferTo($transferTo, $wallet, $request->amount);
                $wallet->save();
            } else {
                Flash::error('Insufficient amount to transfer');
                return back();
            }
        }

        if ($transferFrom == 'referral_wallet') {
            if ($wallet->referral_balance >= $request->amount&& $wallet->referral_balance != 0) {
                $wallet->referral_balance = $wallet->referral_balance - $request->amount;
                $this->transferTo($transferTo, $wallet, $request->amount);
                $wallet->save();
            } else {
                Flash::error('Insufficient amount to transfer');
                return back();
            }
        }

        if ($transferFrom == 'overflow_wallet' ) {
            if ($wallet->overflow_wallet >= $request->amount&& $wallet->overflow_wallet != 0)  {
                $wallet->overflow_wallet = $wallet->overflow_wallet - $request->amount;
                $this->transferTo($transferTo, $wallet, $request->amount);
                $wallet->save();
            } else {
                Flash::error('Insufficient amount to transfer');
                return back();
            }
        }

       
        
        // if it is lesser return a flash error saying the user dont have enough fund to transfer same goes for the transfer from
        // if everything is okey with the transfer to and transfer from then proceed with the transfer
       

            Flash::success('Transfer successful');

            return redirect()->back();

        

    }

    public function transferTo($transferTo, $wallet, $amount)
    {
        
        if ($transferTo == 'investment_wallet') {
            $wallet->investment_balance = $wallet->investment_balance + $amount;
            $wallet->save();
        }

        if ($transferTo == 'cfi_wallet') {
            $wallet->balance = $wallet->balance + $amount;
            $wallet->save();
            
        }

        if ($transferTo == 'referral_wallet') {
            $wallet->referral_balance = $wallet->referral_balance + $amount;
            $wallet->save();
            
        }

        if ($transferTo == 'overflow_wallet') {
            $wallet->overflow_wallet = $wallet->overflow_wallet + $amount;
            $wallet->save();
            
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}