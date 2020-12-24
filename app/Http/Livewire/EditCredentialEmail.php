<?php

namespace App\Http\Livewire;

use App\EmailWidget;
use App\Models\User;
use Livewire\Component;

class EditCredentialEmail extends Component
{
    public $subject, $message, $email, $successMessage;
    public $subjectField, $messageField;
    protected $listeners = ['welcomeEmailUpdated' => 'updateEmailEvent'];


    public function mount()
    {
        $this->email = EmailWidget::find(4);

        $this->subject = $this->email->subject;
        $this->message = $this->email->message;
    }

    public function updateEmailEvent()
    {

        $this->subject = EmailWidget::find(4)->subject;
        $this->message = EmailWidget::find(4)->message;
    }

    public function update()
    {
        $this->email->subject = $this->subjectField;
        $this->email->message = $this->messageField;
        $this->email->save();
        $this->resetField();
        
        // emit an event
        $this->emitSelf('welcomeEmailUpdated');
        
        $this->successMessage = 'Updated';
    }

    public function resetField()
    {
        $this->subjectField = '';
        $this->messageField = '';
    } 
 
    public function render()
    {
        return view('livewire.edit-credential-email');
    }
}