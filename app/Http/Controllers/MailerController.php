<?php

namespace App\Http\Controllers;

use App\Mailer;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('mail.new_mail');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());

        // Upload file to the directory
        $is_attached=0;
        $insertAttachment = array();
        if($request->hasfile('attachment'))
        {
            $file = $request->file('attachment');
            dump($file->getClientMimeType());
            dd($file);
            $name=time().$file->getClientOriginalName();
            $file->move(base_path().'/uploads/', $name);
            $is_attached=1;
        }
        // dd('no file');
        $mailer = new Mailer();
        $mailer->user_id = 0;
        $mailer->subject = $request->subject;
        $mailer->to      = $request->to;
        $mailer->body    = $request->body;
        $mailer->is_attachment = $is_attached;
        $mailer->save();
        $lastkey = $mailer->id;
        if($is_attached===1){
            $insertAttachment['user_id']=0;
            $insertAttachment['mail_id']=$lastkey;
            $insertAttachment['filename']=$name;
            $insertAttachment['filepath']=base_path().'/uploads/';
            $insertAttachment['filesize']=$file->getClientSize();
            $insertAttachment['filetype']=$file->getClientMimeType();
            $insertAttachment['created_at']=date('Y-m-dH:i:s');
            DB::table('uploaded_file_process')->insert($insertAttachment);
        }

        $response = Mail::to($request->to)->send(new SendEmail($request->subject,$request->body,$insertAttachment)); 
        return redirect()->route('mailer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailer  $mailer
     * @return \Illuminate\Http\Response
     */
    public function show(Mailer $mailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailer  $mailer
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailer $mailer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailer  $mailer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailer $mailer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailer  $mailer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailer $mailer)
    {
        //
    }
}
