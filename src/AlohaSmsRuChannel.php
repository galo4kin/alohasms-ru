<?php

namespace NotificationChannels\AlohaSmsRu;

use NotificationChannels\AlohaSmsRu\Exceptions\CouldNotSendNotification;
use NotificationChannels\AlohaSmsRu\Events\MessageWasSent;
use NotificationChannels\AlohaSmsRu\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class AlohaSmsRuChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\AlohaSmsRu\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
