<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Webklex\IMAP\Client;
use App\Mailer;
use Auth;

class InboundMailsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->getInbox();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
    }

    public function getInbox()
    {
        // dd('hi there');
        $oClient = new Client([
            'host'          => 'imap.gmail.com',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => false,
            'username'      => 'sonamistytyagi786@gmail.com',
            'password'      => 't0shU@8376979391',
            'protocol'      => 'imap'
        ]);

        //Connect to the IMAP Server
        $oClient->connect();
        
        //Get all Mailboxes
        /** @var \Webklex\IMAP\Support\FolderCollection $aFolder */
        $aFolder = $oClient->getFolders();
        //Loop through every Mailbox
        /** @var \Webklex\IMAP\Folder $oFolder */
        foreach($aFolder as $oFolder){
            //Get all Messages of the current Mailbox
            /** @var \Webklex\IMAP\Support\MessageCollection $oMessage */

            $aMessage = $oFolder->query()->since(now()->subDays(1))->get();
            /** @var \Webklex\IMAP\Message $oMessage */
            foreach ($aMessage as $oMessage) {
                // dump($oMessage->uid);
                // dump($oMessage->message_id);
                // dump($oMessage->from[0]->mail);
                // dump($oMessage->date->toDateTimeString());
                // dump($oMessage->to[0]->mail);
                $uidCount = Mailer::where('uid','=',$oMessage->uid)->get();
                if($uidCount->count()==0){
                    $mailer = new Mailer();
                    $mailer->user_id = Auth::user()->id;
                    $mailer->subject = $oMessage->subject;
                    $mailer->to      = trim($oMessage->to[0]->mail);
                    $mailer->from    = trim($oMessage->from[0]->mail);
                    $mailer->body    = $oMessage->getHTMLBody(true);
                    $mailer->is_status = 1;
                    $mailer->created_at = $oMessage->date->toDateTimeString();
                    $mailer->uid        = $oMessage->uid;
                    $mailer->message_id = $oMessage->message_id;
                    if($oMessage->getAttachments()->count()>0)
                    {
                        $mailer->is_attachment = 1;
                    }else{
                        $mailer->is_attachment = 0;
                    }
    
                    $mailer->save();
                }
                // echo $oMessage->subject . '<br />';
                // echo 'Attachments: ' . $oMessage->getAttachments()->count() . '<br />';
                // echo $oMessage->getHTMLBody(true);

                //Move the current Message to 'INBOX.read' // this did not work for me
                // if($oMessage->moveToFolder('INBOX.read') == true){
                /* if ($oMessage->moveToFolder(env('IMAP_PROCESSED_FOLDER')) == true) {
                    echo 'Message has been moved';
                } else {
                    echo 'Message could not be moved';
                } */
            }
        }
    }

}
