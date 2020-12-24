<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\InvestmentWallet;

class UsersWalletController extends Controller
{

    public function index()
    {
        if (auth()->user()->role_id == 1) {

            $users = User::with('investment_wallets', 'wallets')->orderBy('updated_at', 'desc')->paginate(4);
            
            return view('user_wallets.index', ['users' => $users]);
        }
    }


    public function show($id)
    {
        $user = User::find($id);
        $wallet = $user->wallets()->first();
        return view('user_wallets.show', ['user' => $user, 'wallet' => $wallet]);
    }

    public function edit($id)
    {
        

        
        
        $user = User::find($id);
        $wallet = $user->wallets()->first();

        return view('user_wallets.edit', [
            'user' => $user,
            'wallet' => $wallet,
            ]);
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'wallet_balance' => 'required|numeric'
        // ]);

        if ($request->wallet_balance) {
            $wallet = Wallet::find($id);
            $wallet->balance = $request->wallet_balance;
            $wallet->save();
            Flash::success('CFI Balance Update Successful');
        }

        if ($request->investment_balance) {
            
            $investment_wallet = Wallet::find($id);
            $investment_wallet->investment_balance = $request->investment_balance;
            $investment_wallet->save();
           
            Flash::success('Investment Balance Update Successful');
        }
        if ($request->referral_balance) {
            $referral_wallet = Wallet::find($id);
            $referral_wallet->referral_balance = $request->referral_balance;
            $referral_wallet->save();
            Flash::success('Referral Balance Update Successful');
        }

        return redirect()->back();
    }

}