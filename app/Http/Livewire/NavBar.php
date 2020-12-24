<?php

namespace App\Http\Livewire;

use App\PhoneNumber;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        $ukNumber = PhoneNumber::first()->phone_number;
        $arabicNumber = PhoneNumber::all()->last()->phone_number;
        return view('livewire.nav-bar', compact('ukNumber', 'arabicNumber'));
    }
}