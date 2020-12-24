<?php

namespace App\Http\Livewire;

use App\EmailWidget;
use Livewire\Component;

class WithdrawalConfirmationEmail extends Component
{
    public $subject, $message, $email, $successMessage;
    public $subjectField, $messageField;
    protected $listeners = ['welcomeEmailUpdated' => 'updateEmailEvent'];


    public function mount()
    {
        $this->email = EmailWidget::find(3);

        $this->subject = $this->email->subject;
        $this->message = $this->email->message;
    }

    public function updateEmailEvent()
    {

        $this->subject = EmailWidget::find(3)->subject;
        $this->message = EmailWidget::find(3)->message;
    }

    public function update()
    {
        $this->email->subject = $this->subjectField;
        $this->email->message = $this->messageField;
        $this->email->save();

        // emit an event
        $this->resetField();
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
        return view('livewire.withdrawal-confirmation-email');
    }
}