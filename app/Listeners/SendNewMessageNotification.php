<?php

namespace App\Listeners;

use App\Events\NewMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewMessageNotification;

class SendNewMessageNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewMessage $event)
    {
         $admin = User::where('role_id', 1)->first();
        Notification::send($admin, new NewMessageNotification($event->message));
    }
}
