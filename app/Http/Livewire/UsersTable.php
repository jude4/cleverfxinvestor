<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\User;
use App\Referral;
use Livewire\Component;

class UsersTable extends Component
{
    use WithPagination;

  

    public $count;
    public $enlist = 5;
    public $active = null;
    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search', 'active', 'sortAsc', 'sortField'];


    public function mount()
    {
        $this->count = User::all()->count();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortField = $field;
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
    }

    public function render()
    {
        $referrals = Referral::with('users')->get();

        $my_account = User::find(auth()->user()->id);

        return view('livewire.users-table', [
            'users' => User::where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->latest()
                ->paginate($this->enlist),
            'my_account' => $my_account,
            'referrals' => $referrals
        ]);
    }
}