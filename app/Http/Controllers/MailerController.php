<?php

namespace App\Http\Controllers;

use App\Mailer;
use App\Mail\MailerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Config;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
        $mailer = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',0]])->orderBy('created_at', 'desc')->simplePaginate(50);
        $countSent = $mailer->count();

        $templates = DB::select("SELECT id, `title` FROM mailtemplate WHERE user_id=".Auth::user()->id);
        
        $starred = 0;
        $sql="SELECT COUNT(*) AS `starred` FROM mails WHERE is_starred=1 AND user_id=".Auth::user()->id." GROUP BY is_starred";
        $starredResult = DB::select($sql);
        if(count($starredResult)>0)
        {
            $starred = $starredResult[0]->starred;
        }

        $trash = 0;
        $trashResult = DB::select("SELECT COUNT(*) AS `count` FROM mails WHERE is_status=4 AND user_id=".Auth::user()->id." GROUP BY is_status");
        if(count($trashResult)>0)
        {
            $trash = $trashResult[0]->count;
        }
        return view('mail.new_mail',compact('countSent','mailer','templates','starred','trash'));

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
            $size = $file->getClientSize();
            $name=time().$file->getClientOriginalName();
            Storage::put('public/attachments/'.$name, $name);
            // dump($name);
            // dd($NAME);
            // $file->move(base_path().'/uploads/', $name);
            $is_attached=1;
            $insertAttachment['filename']=$name;
            $insertAttachment['filepath']='public/attachments/';
            $insertAttachment['filesize']=$size;
            $insertAttachment['filetype']=$file->getClientMimeType();
        }
        $TO = explode(',',$request->to);
        foreach($TO as $to){
            if(empty(Mail::to(trim($to))->send(new MailerEmail($request->subject,$request->body,$insertAttachment)))){
                $mailer = new Mailer();
                $mailer->user_id = Auth::user()->id;
                $mailer->subject = $request->subject;
                $mailer->to      = trim($to);
                $mailer->body    = $request->body;
                $mailer->is_attachment = $is_attached;
                $mailer->save();
                $lastkey = $mailer->id;
                if($is_attached===1){
                    $insertAttachment['user_id']=Auth::user()->id;
                    $insertAttachment['mail_id']=$lastkey;
                    $insertAttachment['created_at']=date('Y-m-d H:i:s');
                    DB::table('mail_attachment')->insert($insertAttachment);
                }
        
            }else{
                //Mail not send messahe goes here
            }
        }

        // $response = Mail::to($request->to)->send(new MailerEmail($request->subject,$request->body,$insertAttachment)); 
        // dd($response);
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

        $trash = 0;
        $trashResult = DB::select("SELECT COUNT(*) AS `count` FROM mails WHERE is_status=4 AND user_id=".Auth::user()->id." GROUP BY is_status");
        if(count($trashResult)>0)
        {
            $trash = $trashResult[0]->count;
        }

        return response()->json(['success'=>'Mails Deleted','total'=>count($IDs),'trash'=>$trash]);
        exit;
    }

    public function starred(Request $request){
        DB::table('mails')->where('id', $request->mails_id)->update(['is_starred' => $request->is_starred]);
        $sql="SELECT COUNT(*) AS `starred` FROM mails WHERE is_starred=1 AND user_id=".Auth::user()->id." GROUP BY is_starred";
        $starred = DB::select($sql);
        return response()->json(['success'=>'success','error'=>1,'starred'=>$starred[0]->starred]);
        exit;
    }

    public function getmessage(Request $request){
        $sql="SELECT m.id, m.fullname, m.subject, m.body, m.from, m.to, m.cc, m.is_attachment, m.is_starred, m.is_status, m.created_at, ma.filepath, ma.filename, ma.filesize, ma.filetype FROM mails m LEFT JOIN mail_attachment ma ON m.id=ma.mail_id WHERE m.user_id=".Auth::user()->id." AND m.id=".$request->mailid;
        $mail = DB::select($sql);
        return response()->json(['success'=>'success','error'=>1,'mail'=>$mail[0]]);
        exit;
        
    }
    public function downloadAttachment(Request $request){
        return response()->download(storage_path('/storage/app/public/attachments/'. $request->filename));
        exit;
    }
}
