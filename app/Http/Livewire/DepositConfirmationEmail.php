<?php

namespace App\Http\Livewire;

use App\EmailWidget;
use Livewire\Component;

class DepositConfirmationEmail extends Component
{
    public $depositSubject, $depositMessage, $depositEmail, $successMessage;
    public $depositSubjectField, $depositMessageField;
    protected $listeners = ['depositEmailUpdated' => 'updateDepositEmailEvent'];


    public function mount()
    {
        $this->depositEmail = EmailWidget::find(2);

        $this->depositSubject = $this->depositEmail->subject;
        $this->depositMessage = $this->depositEmail->message;
    }

    public function updateDepositEmailEvent()
    {

        $this->depositSubject = EmailWidget::find(2)->subject;
        $this->depositMessage = EmailWidget::find(2)->message;
    }

    public function update()
    {
        $this->depositEmail->subject = $this->depositSubjectField;
        $this->depositEmail->message = $this->depositMessageField;
        $this->depositEmail->save();
        $this->resetField();
        // emit an event
        $this->emit('depositEmailUpdated');
        
        $this->successMessage = 'Updated';
    }

    public function resetField()
    {
        $this->depositSubjectField = '';
        $this->depositMessageField = '';
    }
    
    public function render()
    {
        return view('livewire.deposit-confirmation-email');
    }
}