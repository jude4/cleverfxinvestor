<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\WithdrawalInterval;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class WithdrawalIntervalController extends Controller
{
    public function index()
    {
      

       $users = DB::table('users')
            ->join('withdrawal_intervals', 'users.id', '=', 'withdrawal_intervals.user_id')
            ->select('users.*', 'withdrawal_intervals.interval', 'withdrawal_intervals.start_date', 'withdrawal_intervals.end_date')
            ->latest()
            ->paginate(6);

        $currentTime = Carbon::now()->addDays(7);

        


        return view('withdrawal_interval.index', compact('users', 'currentTime'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'withdrawal_interval' => 'required'
        ]);

        WithdrawalInterval::create([
            'user_id' => auth()->id(),
            'interval' => $request->withdrawal_interval
        ]);

        Flash::success('Successful');

        return back();
        

    }
}