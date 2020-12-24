<?php

namespace App\Http\Livewire;

use App\Mail\CustomMail;
use App\Message;
use App\Models\User;
use App\Notifications\NotifyUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class SendEmailNotification extends Component
{
    public $recipient, $email, $message, $subject;
    public $successMessage;

    public function sendEmail()
    {
        
        
        if ($this->recipient == 'single') {
            $message = Message::create([
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message
            ]);
            Mail::to($this->email)->send(new CustomMail($message));     
        }

       if ($this->recipient == 'multiple') {
            //    notify all register users
            $message = Message::create([
                'email' => 'This email was sent to all registered users',
                'subject' => $this->subject,
                'message' => $this->message
            ]);
        $users = User::all();
        Notification::send($users, new NotifyUsers($message));
       }
       
       $this->successMessage = 'Email Sent was Successful';

       $this->resetField();
    }

    public function resetField()
    {
        $this->email = '';
        $this->subject = '';
        $this->message =  '';
    }
    
    public function render()
    {
        return view('livewire.send-email-notification');
    }
}