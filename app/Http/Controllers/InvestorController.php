<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function miniInvestor($id = null)
    {
       
       $miniInvestors = Wallet::where('investment_plan_id', $id ? $id : 1)->pluck('user_id');

        $usersInvestmentplan = User::find($miniInvestors);
        
        
        return view('plans.index', compact('usersInvestmentplan'));
    }

    public function standardInvestor()
    {
        return $this->miniInvestor(2);
    }

    public function premiumInvestor()
    {
        return $this->miniInvestor(3);
    }

    public function premiumProInvestor()
    {
        return $this->miniInvestor(4);
    }
}