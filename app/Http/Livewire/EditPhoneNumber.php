<?php

namespace App\Http\Livewire;

use App\PhoneNumber;
use Illuminate\Http\Request;
use Livewire\Component;

class EditPhoneNumber extends Component
{
    public $ukNumber, $uk;
    public $arabicNumber, $arabic, $arabicSuccessMessage, $ukSuccessMessage;

    public function mount()
    {
        $this->ukNumber = PhoneNumber::first()->phone_number;
        $this->arabicNumber = PhoneNumber::all()->last()->phone_number;
    }

    public function updateUkNumber(Request $request)
    {
        $number = PhoneNumber::find(1);
        $number->phone_number = $this->uk;
        $number->save();

        $this->emitTo('phone-number', 'phoneNumber');

        $this->ukSuccessMessage = 'Contact Update';
    }

    public function updateArabicNumber(Request $request)
    {

        $number = PhoneNumber::find(2);
        $number->phone_number = $this->arabic;
        $number->save();

        $this->emitTo('phone-number', 'phoneNumber');

        $this->arabicSuccessMessage = 'Contact Update';
    }
    
    public function render()
    {
        return view('livewire.edit-phone-number');
    }
}