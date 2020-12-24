<?php

namespace App\Http\Livewire;

use App\Credential;
use Livewire\Component;
use Livewire\WithFileUploads;

class ResidenceProof extends Component
{
    use WithFileUploads;
    public $residence, $successMessage;

    protected $rules = [
        'residence' => 'required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function uploadResidence()
    {
        $validate = $this->validate();
        $proof = $this->residence ? $this->residence->store('residence_proof') : null;

        Credential::updateOrCreate(
            [
                'user_id' => auth()->id(),
            ],
            [
                'residence_proof' => $proof
            ]
        );

        $this->successMessage = 'Saved';
    }

    public function render()
    {
        $credential = Credential::where('user_id', auth()->id())->first();

        return view('livewire.residence-proof', compact('credential'));
    }
}