<?php

namespace App\Http\Livewire;

use App\PhoneNumber as AppPhoneNumber;
use Livewire\Component;

class PhoneNumber extends Component
{
    public $ukNumber;
    public $arabicNumber;
    public $listeners = ['phoneNumber' => 'updatePhoneNumbers'];

    public function updatePhoneNumbers()
    {
         $this->ukNumber = AppPhoneNumber::first()->phone_number;
         $this->arabicNumber = AppPhoneNumber::all()->last()->phone_number;
    }

    public function mount()
    {
        $this->ukNumber = AppPhoneNumber::first()->phone_number;
        $this->arabicNumber = AppPhoneNumber::all()->last()->phone_number;
    }
    
    public function render()
    {
        return view('livewire.phone-number');
    }
}