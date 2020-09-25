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
use App\Invitemeeting;
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
        return Functions::save_meeting($jdata);
    }
    public function getmeeting(){
        $d = new Myzoom;
        $jdata = $d->listMeetings();
        $meetings = json_decode($jdata,JSON_OBJECT_AS_ARRAY);
        
      //  $meetings = Meeting::where(['user_id'=>Auth::user()['id'],'status'=>'waiting'])->orderBy('id','desc')->get();
        return view('zoom.list',compact('meetings'));
    }

    public function host(Request $r){
        $loggedinUser = Auth::user();
        
        $d = new Myzoom;
        $details = json_decode($d->getMeetingInfo($r['mid']),JSON_OBJECT_AS_ARRAY); 
        $mid = $id = $details['id'];
        $p = $details['password'];
        $role = ($loggedinUser['role_id']==2)?1:0;
        $name = $loggedinUser['name'];
       return view('zoom.hostmeeting',compact('mid','p','role','name'));
    }
    public function status(Request $r){
        $mtng = Meeting::where(['id'=>$r->mid])->update(['status'=>'complete']);
        return redirect('/getmeeting'); 
    }
    public function delete(Request $r){
        $d = new Myzoom;
        $details = $d->deleteAMeeting($r['mid']); // ($d->deleteAMeeting($r['mid']),JSON_OBJECT_AS_ARRAY); 
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
        $mtng = Meeting::where(['id'=>$r->mid])->get();
        $emailsusers = User::whereIn('id',$users)->get();
        $subject = "Averti meeting by ". Auth::user()['name'];
        foreach($emailsusers as $user){
            Invitemeeting::create(['user_id'=>$user['id'],'advisor_id'=>Auth::user()['id'],'mid'=>$r->mid]);
            $user['mid'] = $r->mid;
            $user['time'] = $mtng[0]->start_time;
            $ss = Mail::to($user->email)->send(new SendEmail($subject,'emails.email',$user));
        }

        if(!$ss){
            return response()->json(['status'=>1,'msg'=>'Invite send']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Please try again']);
        }
        
    }
    public function invited(){
        $invites = Invitemeeting::where('user_id',Auth::user()['id'])->orderBy('id','desc')->get();
       /*  foreach($invites as $i){
            print_r($i->user->single);die;
        } */
        return view('zoom.invited',compact('invites'));
    }

}
