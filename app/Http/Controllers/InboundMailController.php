<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webklex\IMAP\Client;

class InboundMailController extends Controller
{
    //

    public function getMails(Request $request)
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
        // Alternative by using the Facade
        // $oClient = Webklex\IMAP\Facades\Client::account('default');
       
        
        //Connect to the IMAP Server
        $oClient->connect();
        
        //Get all Mailboxes
        /** @var \Webklex\IMAP\Support\FolderCollection $aFolder */
        $aFolder = $oClient->getFolders();
        
        //Loop through every Mailbox
        /** @var \Webklex\IMAP\Folder $oFolder */
        foreach($aFolder as $oFolder){
        
            //Get all Messages of the current Mailbox $oFolder
            /** @var \Webklex\IMAP\Support\MessageCollection $aMessage */
            $aMessage = $oFolder->messages()->all()->limit(10, 2)->get();
            
            /** @var \Webklex\IMAP\Message $oMessage */
            foreach($aMessage as $oMessage){
                echo $oMessage->getSubject().'<br />';
                echo 'Attachments: '.$oMessage->getAttachments()->count().'<br />';
                echo $oMessage->getHTMLBody(true);
                
                //Move the current Message to 'INBOX.read'
                /* if($oMessage->moveToFolder('INBOX.read') == true){
                    echo 'Message has ben moved';
                }else{
                    echo 'Message could not be moved';
                } */
            }
        }
    }

    public function getInbox(Request $request)
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
        // Alternative by using the Facade
        // $oClient = Webklex\IMAP\Facades\Client::account('default');
       
        
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

            // added this if statment only want to get the INBOX	           
            // dump($oFolder->name); 
            if($oFolder->name == 'INBOX') {

                // $aMessage = $oMailbox->getMessages(); original example had undefined variable      
                // $oMailBox changed to $oFolder 

                $aMessage = $oFolder->getMessages()->limit(10, 2)->get();
                /** @var \Webklex\IMAP\Message $oMessage */
                foreach ($aMessage as $oMessage) {
                    echo $oMessage->subject . '<br />';
                    echo 'Attachments: ' . $oMessage->getAttachments()->count() . '<br />';
                    echo $oMessage->getHTMLBody(true);

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
}
