<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeUserEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $info;

    public function __construct($user, $info)
    {
        $this->user = $user;
        $this->info = $info;
    }

    public function build()
    {
        return $this->subject('Welcome to Question Point')
            ->view('emails.user.welcome')
            ->with([
                'user' => $this->user,
                'info' => $this->info,
            ]);
    }
}
