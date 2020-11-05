<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;
use App\User;
class RequestNotification extends Notification
{
    use Queueable;
    Protected $user_req;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_req)
    {
     $this->user_req= $user_req;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
      //  dd ($this->user_req->name);
        return [
            'user_req'=>$this->user_req,
            'user'=>$notifiable,
            ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
          'repliedTime'=>Carbon::now(),
            // 'user_id' => $this->user_id,
            // 'user_name'=> $this->user_name,
        ];
    }
   
}




