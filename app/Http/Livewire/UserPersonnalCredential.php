<?php

namespace App\Http\Livewire;

use App\Credential;
use App\Models\User;
use App\Notifications\CredentialConfirmation;
use Livewire\Component;

class UserPersonnalCredential extends Component
{
    public $credentials, $successMessage;

    public function confirmCredential($id, $status)
    {
   
       $credential = Credential::find($id);

       $credential->status = true;
       $credential->save();

       $user = User::find($credential->user_id);

       $user->notify(new CredentialConfirmation($user));

        $this->successMessage = 'Confirmed';
    }
    
    public function render()
    {
        return view('livewire.user-personnal-credential');
    }
}