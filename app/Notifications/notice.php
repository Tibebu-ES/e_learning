<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;


class notice extends Notification
{
    use Queueable;

    public $users;
    public $message;


    public function __construct($users,$message){
        $this->users = $users;
        $this->message = $message;
    }


    public function via($notifiable){
        return ['database'];
    }



    public function toDatabase($notifiable)
    {
        return [
            'user_id' => $this->users->id,
            'message' => $this->message,
            'user_name' => $this->users->name,
        ];
    }
}
