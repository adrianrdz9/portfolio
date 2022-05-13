<?php

namespace App\Observers;

use App\Models\Message;
use App\Notifications\MessageReceivedNotification;
use Illuminate\Support\Facades\Notification;

class MessageObserver
{
    public function created(Message $message)
    {
        Notification::route('mail', config('app.admin_email'))
            ->notify(new MessageReceivedNotification($message));
    }
}
