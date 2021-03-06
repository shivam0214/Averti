<?php

namespace App\Http\Controllers;

use App\Mailer;
use App\Mail\MailerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Config;
use App\User;
use App\Group;
use App\User_group;

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
        $inboxlist = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',1]])->orderBy('created_at', 'desc')->simplePaginate(50);
        $sentlist = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',0]])->orderBy('created_at', 'desc')->simplePaginate(50);
        $draftlist = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',2]])->orderBy('created_at', 'desc')->simplePaginate(50);
        $trashlist = Mailer::where([['user_id','=',Auth::user()->id],['is_status','=',4]])->orderBy('created_at', 'desc')->simplePaginate(50);
        $starredlist = Mailer::where([['user_id','=',Auth::user()->id],['is_starred','=',1]])->orderBy('created_at', 'desc')->simplePaginate(50);

        $countMails = DB::select("SELECT COUNT(is_status) total, CASE WHEN is_status=0 THEN 'sent' WHEN is_status=1 THEN 'inbox' WHEN is_status=2 THEN 'draft' WHEN is_status=4 THEN 'trash' ELSE 'NA' END AS labels FROM mails WHERE user_id='".Auth::user()->id."' GROUP BY is_status ORDER BY is_status ASC");

        $templates = DB::select("SELECT id, `title` FROM mailtemplate WHERE user_id=".Auth::user()->id);
        
        $starred = 0;
        $sql="SELECT COUNT(*) AS `starred` FROM mails WHERE is_starred=1 AND user_id=".Auth::user()->id." GROUP BY is_starred";
        $starredResult = DB::select($sql);
        if(count($starredResult)>0)
        {
            $starred = $starredResult[0]->starred;
        }

        $draft = 0;
        $draftResult = DB::select("SELECT COUNT(*) AS `count` FROM mails WHERE is_status=2 AND user_id=".Auth::user()->id." GROUP BY is_status");
        if(count($draftResult)>0)
        {
            $trash = $draftResult[0]->count;
        }

        $groups = Group::where(['advisor_id'=>Auth::user()->id])->get();

        $contacts = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get(); 
        return view('mail.new_mail',compact('inboxlist','sentlist','draftlist','trashlist','starredlist','countMails','templates','starred','draft','contacts','groups'));
    }
    
    public function getMails(Request $r){
        $groups_usermail=User_group::where('group_id',$r->group_id)->get();
        $ids=[] ;
            foreach($groups_usermail as $user_details){
            $ids[] =$user_details['user_id'];
            }
        $value= user::where(['role_id'=>3])->whereIn('id',$ids)->get();
        $myemails = '';
        foreach($value as $email){
         $myemails .= $email['email'].',';
            }
            $myemails = rtrim($myemails);
            return response()->json([
                'message' => 'Mails here',
                'mail_result'    => $myemails
            ]);
            exit;
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

    public function getMailSetting(Request $request){
        $outboundsettings = DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','outbound']])->first();
        $inboundsettings = DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','inbound']])->first();
        return view('mail.setting',compact('outboundsettings','inboundsettings'));
    }

    public function saveOutboundMailSettings(Request $request)
    {
        $validatedData = $request->validate([
            'vendor' => 'required',
            'host' => 'required',
            'username' => 'required|max:255',
            'password' => 'required',
            'port' => 'required',
            'encryption' => 'required|not_in:0'
        ]);
        
        $data['vendor']=$request->vendor;
        $data['host']=$request->host;
        $data['username']=$request->username;
        $data['password']=$request->password;
        $data['port']=$request->port;
        $data['encryption']=$request->encryption;
        $data['direction']='outbound';
        $data['validate_cert']=$request->validate_cert;
        $count = DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','outbound']])->count();
        // dd($count);
        if($count==0){
            $data['user_id']=Auth::user()->id;
            $data['created_at']=date('Y-m-d H:i:s');
            DB::table('mailers')->insert($data);
            $msg = 'Outbound Mail setting is added successfully.';
        }else{
            $data['updated_at']=date('Y-m-d H:i:s');
            DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','outbound']])->limit(1)->update($data);
            $msg = 'Outbound Mail setting is updated successfully.';
        }
        return redirect('mailsetting/')->with('msg', $msg);

    }

    public function saveInboundMailSettings(Request $request)
    {
        $validatedData = $request->validate([
            'vendor' => 'required',
            'host' => 'required',
            'username' => 'required|max:255',
            'password' => 'required',
            'port' => 'required',
            'encryption' => 'required|not_in:0'
        ]);
        
        $data['vendor']=$request->vendor;
        $data['host']=$request->host;
        $data['username']=$request->username;
        $data['password']=$request->password;
        $data['port']=$request->port;
        $data['encryption']=$request->encryption;
        $data['direction']='inbound';
        $data['validate_cert']=$request->validate_cert;
        $count = DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','inbound']])->count();
        // dd($count);
        if($count==0){
            $data['user_id']=Auth::user()->id;
            $data['created_at']=date('Y-m-d H:i:s');
            DB::table('mailers')->insert($data);
            $msg = 'Inbound Mail setting is added successfully.';
        }else{
            $data['updated_at']=date('Y-m-d H:i:s');
            DB::table('mailers')->where([['user_id','=',Auth::user()->id],['direction','=','inbound']])->limit(1)->update($data);
            $msg = 'Inbound Mail setting is updated successfully.';
        }
        return redirect('mailsetting/')->with('msg', $msg);

    }
}
