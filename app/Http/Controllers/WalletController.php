<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Flash;
use Response;

class WalletController extends Controller
{
    public function index()
    {
        $my_wallet = Wallet::where('user_id', auth()->user()->id)->first();
        return view('dashboard.wallet', ['my_wallet' => $my_wallet]);
    }
}
