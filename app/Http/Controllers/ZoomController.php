<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Timezone;
use App\Libraries\Zooms\Myzoom;
use Auth;
use App\Meeting;
use App\Libraries\Functions;
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
}
