<?php

namespace App\Http\Controllers;

use App\Mailer;
use App\Mail\MailerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Config;

class MailerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('overwritemailer', ['only' => ['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mailer = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',0]])->orderBy('created_at', 'desc')->get();
        // dd($mailer);
        $countSent = $mailer->count();
        return view('mail.new_mail',compact('countSent','mailer'));

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
            // dump($file->getClientSize());
            // dd($file);
            $name=time().$file->getClientOriginalName();
            $file->move(base_path().'/uploads/', $name);
            $is_attached=1;
        }
        // dd('no file');
        $mailer = new Mailer();
        $mailer->user_id = Auth::user()->id;
        $mailer->subject = $request->subject;
        $mailer->to      = $request->to;
        $mailer->body    = $request->body;
        $mailer->is_attachment = $is_attached;
        $mailer->save();
        $lastkey = $mailer->id;
        if($is_attached===1){
            $insertAttachment['user_id']=Auth::user()->id;
            $insertAttachment['mail_id']=$lastkey;
            $insertAttachment['filename']=$name;
            $insertAttachment['filepath']=base_path().'/uploads/';
            $insertAttachment['filesize']='888888';
            $insertAttachment['filetype']=$file->getClientMimeType();
            $insertAttachment['created_at']=date('Y-m-d H:i:s');
            DB::table('mail_attachment')->insert($insertAttachment);
        }


        $response = Mail::to($request->to)->send(new MailerEmail($request->subject,$request->body,$insertAttachment)); 
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

    public function trash(Request $request)
    {
        // dd($request->mails_id);
        $IDs = explode(',',trim($request->mails_id));
        DB::table('mails')->whereIn('id', $IDs)->update(['is_status' => 4]);
        
        return response()->json(['success'=>'Mails Deleted','total'=>count($IDs)]);
        exit;
    }
}
