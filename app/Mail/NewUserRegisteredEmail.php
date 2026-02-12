<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $info;
    public $adminPanelUrl;

    public function __construct($user, $info, $adminPanelUrl)
    {
        $this->user = $user;
        $this->info = $info;
        $this->adminPanelUrl = $adminPanelUrl;
    }

    public function build()
    {
        return $this->subject('New User Registered at Question Point')
            ->view('emails.admin.user-registered')
            ->with([
                'user' => $this->user,
                'info' => $this->info,
                'adminPanelUrl' => $this->adminPanelUrl,
            ]);
    }
}
