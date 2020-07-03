<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Auth;
use Config;

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
        $mail=DB::table('mailers')->where('user_id',Auth::user()->id)->first();
	    $config = array(
            'driver' => $mail->vendor,
            'host' => $mail->host,
            'port' => $mail->port,
            'from' => array('address' => Auth::user()->email, 'name' => Auth::user()->name),
            'encryption' => $mail->encryption,
            'username' => $mail->username,
            'password' => $mail->password,
            'sendmail' => '/usr/sbin/sendmail -bs',
            'pretend' => false
        );
        Config::set('mail',$config);
        

        extract(Config::get('mail'));

        // create new mailer with new settings
        $transport = (new \Swift_SmtpTransport($host, $port))
                        ->setUsername($username)
                        ->setPassword($password)
                        ->setEncryption($encryption);

        \Mail::setSwiftMailer(new \Swift_Mailer($transport));
    
        // create new mailer with new settings
        /* $transport = (new \Swift_SmtpTransport($mail->host, $mail->port))
        ->setUsername($mail->username)
        ->setPassword($mail->password)
        ->setEncryption($mail->encryption);

        \Mail::setSwiftMailer(new \Swift_Mailer($transport)); */


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
            //This condition is used for attachment is ther in mail
            return $this->from(Auth::user()->email, Auth::user()->name)
            ->subject($this->subject)
            ->markdown('mail.mail_container')
            ->attach($this->data['filepath'].'/'.$this->data['filename'], [
                'as' => $this->data['filename'],
                'mime' => $this->data['filetype'],
            ])
            ->with([
                'body' => $this->view,
                'name' => 'Toshu Nigam',
                'link' => 'http://averti.ayanshtechnology.com/mailer',
            ]);

        }else{

            return $this->from(Auth::user()->email, Auth::user()->name)
            ->subject($this->subject)
            // ->markdown('mail.welcome_to_user_subscribe')
            ->markdown('mail.mail_container')
            ->with([
                'body' => $this->view,
                'name' => 'Toshu Nigam',
                'link' => 'http://averti.ayanshtechnology.com/mailer',
            ]);
        }
    }
}