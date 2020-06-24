<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable

{

    use Queueable, SerializesModels;



    public $subject;

    public $view;

    public $data=array();

    public function __construct($subject,$view,$data)
    {

        $this->subject=$subject;

        $this->view=$view;

        $this->data=$data;

    }



    public function build()
    {
        // return  $this->subject($this->subject)->view('mail.'.$this->view)->with(['data'=>$this->data]);
        return $this->from('toshu@gventure.net', 'Mailtrap')
            ->subject($this->subject)
            ->markdown('mail.welcome_to_subscribe')
            ->attach($this->data['filepath'].'/'.$this->data['filepath'], [
                'as' => $this->data['filename'],
                'mime' => $this->data['filetype'],
            ])
            ->with([
                'body' => $this->view,
                'data' => $this->data
        ]);

    }

}

