<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordLinkEmail extends Notification
{
    use Queueable;

    public $token, $email, $name;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $token, string $email, string $name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): \Illuminate\Notifications\Messages\MailMessage
    {
        $url = url(route('password.reset', [
            'token' => $this->token,
            'email' => $this->email,
        ], false));

        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('Reset Your Password')
            ->view('emails.password-reset', [
                'user' => $notifiable,
                'info' => appinfo(),
                'user' => (object)[
                    'name' => $this->name,
                    'link' => $url,
                ],
            ]);
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
