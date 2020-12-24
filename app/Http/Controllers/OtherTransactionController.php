<?php

namespace App\Http\Controllers;

use App\BonusTransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherTransactionController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == 2) {
            $otherTransactions = BonusTransactionHistory::where('reciever_id', auth()->id())->with('users', 'payer')->latest()->paginate(6);
        } else {
            $otherTransactions = BonusTransactionHistory::with('users', 'payer')->latest()->paginate(6);
        }
        
        return view('other-transaction.index', compact('otherTransactions'));
    }
}