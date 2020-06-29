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
        return  $this->subject($this->subject)->view('mail.'.$this->view)->with(['data'=>$this->data]);
        
    }

}

