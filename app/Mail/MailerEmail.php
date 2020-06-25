<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Auth;

class MailerEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $view;
    public $data=array();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$view,$data)
    {

        $this->subject=$subject;

        $this->view=$view;

        $this->data=$data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        
        if(count($this->data)>0){
            return $this->from(Auth::user()->email, Auth::user()->name)
            ->subject($this->subject)
            ->markdown('mail.welcome_to_user_subscribe')
            ->attach($this->data['filepath'].'/'.$this->data['filename'], [
                'as' => $this->data['filename'],
                'mime' => $this->data['filetype'],
            ])
            ->with([
                'body' => $this->view,
                'data' => $this->data
            ]);

        }else{

            return $this->from(Auth::user()->email, Auth::user()->name)
            ->subject($this->subject)
            ->markdown('mail.welcome_to_user_subscribe')
            ->with([
                'body' => $this->view,
                'data' => array('type'=>'toshu','verify_key'=>'abcdefghijklmnopqrstuvwxyz')
            ]);
        }
    }
}
