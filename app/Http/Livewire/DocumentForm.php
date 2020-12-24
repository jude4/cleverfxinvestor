<?php

namespace App\Http\Livewire;

use App\Credential;
use Livewire\Component;

class DocumentForm extends Component
{

    public $name, $email, $phone, $relationship, $beneficiary, $address;
    public $successMessage;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required',
        'relationship' => 'required|string',
        'beneficiary' => 'required|string',
        'address' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function SubmitDocument()
    {
        $validate = $this->validate();

        Credential::updateOrCreate(
            [
                'user_id' => auth()->id(),
            ],
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'relationship' => $this->relationship,
                'beneficiary' => $this->beneficiary,
                'address' => $this->address
            ]
        );

        $this->successMessage = 'Saved';

        $this->resetField();
    }

    public function resetField()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->relationship = '';
        $this->beneficiary = '';
        $this->address = '';
    }

    public function render()
    {
        $credential = Credential::where('user_id', auth()->id())->first();
        return view('livewire.document-form', compact('credential'));
    }
}