<?php

namespace App\Http\Livewire;

use App\Credential;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadProof extends Component
{
     use WithFileUploads;
    public $identity, $successMessage;

    protected $rules = [
        'identity' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function uploadIdentity()
    {
        $validate = $this->validate();
        $proof = $this->identity ? $this->identity->store('identity_proof') : null;
       
        Credential::updateOrCreate([
            'user_id' => auth()->id(),
            
        ], [
            'identity_proof' => $proof
        ]);

        $this->successMessage = 'Saved';
    }
    
   
    
    public function render()
    {
        $credential = Credential::where('user_id', auth()->id())->first();
        return view('livewire.upload-proof', compact('credential'));
    }
}