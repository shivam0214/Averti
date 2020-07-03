<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Timezone;
use App\Libraries\Zooms\Myzoom;
use Auth;
use App\Meeting;
use App\Libraries\Functions;
use App\User;
use Mail;
use App\Mail\SendEmail;
class ZoomController extends Controller
{
    public function index(Request $r){
        $d = new Myzoom;
        $timezone = Timezone::all();
        return view('zoom.index',compact('timezone'));
    }
    public function store(Request $r){
        $d = new Myzoom;
        $jdata = $d->createAMeeting($r->input());
        return Functions::save_meeting( $jdata);
    }
    public function getmeeting(){
        $meetings = Meeting::where(['user_id'=>Auth::user()['id'],'status'=>'waiting'])->orderBy('id','desc')->get();
        return view('zoom.list',compact('meetings'));
    }

    public function host(Request $r){
        $loggedinUser = Auth::user();
        $mtng = Meeting::where(['meeting_id'=>$r->mid])->get();
        $id = $mtng[0]->meeting_id;
        $p = $mtng[0]->password;
        $role = ($loggedinUser['role_id']==2)?1:0;
        $name = $loggedinUser['firstname'];
       return view('zoom.hostmeeting',compact('id','p','role','name'));
    }
    public function status(Request $r){
        $mtng = Meeting::where(['meeting_id'=>$r->mid])->update(['status'=>'complete']);
        return redirect('/getmeeting'); 
    }

    public function invite(Request $r){
        $users = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get();
        $mid = $r->mid;
        return view('zoom.invite',compact('users','mid'));
    }
    public function sendinvite(Request $r){
        $users = $r->users;
        $title = $r->topic; 
        $mtng = Meeting::where(['meeting_id'=>$r->mid])->get();
        $emailsusers = User::whereIn('id',$users)->get();
        $subject = "Averti meeting by ". Auth::user()['name'];
        foreach($emailsusers as $user){
            $user['mid'] = $r->mid;
            $user['time'] = $mtng[0]->start_time;
            $ss = Mail::to($user->email)->send(new SendEmail($subject,'emails.email',$user));
        }

        if($ss){
            return response()->json(['status'=>1,'msg'=>'Invite send']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Please try again']);
        }
        
    }
}
