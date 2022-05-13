<?php

namespace App\Notifications;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageReceivedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        protected Message $message
    ) {
    }

    public function via()
    {
        return ['mail'];
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('New message from the portfolio')
            ->line(sprintf(
                'New message from the portfolio from %s (%s), wants to talk about %s:',
                $this->message->email,
                $this->message->name ?? 'Name not provided',
                $this->message->topic,
            ))
            ->line($this->message->message);
    }
}
