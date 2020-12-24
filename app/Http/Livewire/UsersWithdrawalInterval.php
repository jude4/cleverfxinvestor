<?php

namespace App\Http\Livewire;

use App\WithdrawalInterval;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class UsersWithdrawalInterval extends Component
{
    use WithPagination;
    public $search;
    public $enlist = 5;
    
    public $reStart;

    public function mount()
    {
        $this->reStart = Carbon::now();
    }


    public function reStartInterval($user)
    {
        
        // get the user id 
        $userWithdrawalInterval = WithdrawalInterval::where('user_id', $user)->first();
        
        $userWithdrawalInterval->end_date = Carbon::now()->addDays(7);
        $userWithdrawalInterval->save();
    }

    public function updateWithdrawalInterval()
    {
        
    }
    
    public function render()
    {
        $users = DB::table('users')
        ->join('withdrawal_intervals', 'users.id', '=', 'withdrawal_intervals.user_id')
        ->select('users.*', 'withdrawal_intervals.interval', 'withdrawal_intervals.start_date', 'withdrawal_intervals.end_date')
        ->where(function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        })
            ->latest()
            ->paginate($this->enlist);


        // $currentTime = Carbon::now()->addDays(7);
        
        return view('livewire.users-withdrawal-interval',
        compact('users', )
    );
    }
}