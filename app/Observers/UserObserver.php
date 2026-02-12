<?php

namespace App\Observers;

use App\Mail\NewUserRegisteredEmail;
use App\Mail\WelcomeUserEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        Mail::to($user->email)->send(new WelcomeUserEmail($user, appinfo()));

        $adminEmails = User::where('role', 'admin')->pluck('email')->filter()->unique()->values();
        if ($adminEmails->isNotEmpty()) {
            $to = $adminEmails->first();
            $cc = $adminEmails->slice(1)->all();

            Mail::to($to)->cc($cc)->send(new NewUserRegisteredEmail($user, appinfo(), route('dashboard')));
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
