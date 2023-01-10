<?php

namespace App\Listeners;

use App\Events\sendmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class sendmailfired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\sendmail   $event
     * @return void
     */
    public function handle(sendmail  $event)
    {
        $user = User::find($event->userId)->toArray();
        Mail::send('eventMail', $user, function ($message) use ($user) {
            $message->to($user['email']);
            $message->subject('event testing');
        });
    }
}
