<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordChangedEmail extends Mailable
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
        return $this->subject('Your Password Has Been Changed')
            ->view('emails.password-changed')
            ->with([
                'user' => $this->user,
                'info' => $this->info,
            ]);
    }
}
