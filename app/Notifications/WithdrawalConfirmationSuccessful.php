<?php

namespace App\Notifications;

use App\EmailWidget;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalConfirmationSuccessful extends Notification
{
    use Queueable;

   public $user, $balance;
    public function __construct($user, $balance)
    {
        $this->user = $user;
        $this->balance = $balance;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $withdrawalEmail = EmailWidget::find(3);
        return (new MailMessage)
                ->subject($withdrawalEmail->subject)
                ->markdown('notifications.withdrawal-confirmation', [
                    'user' => $this->user,
                    'withdrawalEmail' => $withdrawalEmail
                ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}