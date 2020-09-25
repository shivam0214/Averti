<?php
namespace App\Libraries;
use App\Meeting;
use Auth;
use DB;
Class Functions{

    public function test(){
        return 'ttt';
    }

    public static function save_meeting($jdata){
        $data = json_decode($jdata,true);
      //  print_r($data);die;
        if($data['id']!=''){
            $save = array(
                'user_id'=>Auth::user()['id'],
                'uuid'=>$data['uuid'],
                'meeting_id'=>$data['id'],
                'host_id'=>$data['host_id'],
                'topic'=>$data['topic'],
                'status'=>$data['status'],
                'start_time'=>$data['start_time'],
                'duration'=>$data['duration'],
                'mytimezone'=>$data['timezone'],
                'start_url'=>$data['start_url'],
                'join_url'=>$data['join_url'],
                'password'=>$data['password'],
                'settings'=>json_encode($data['settings']),
                'allresult'=>$jdata
             );
            
           $lastid = Meeting::create($save);
            if($lastid->id){
$notification = array(
                    'status'=>1,
                    'message' => 'Zoom meeting created',
                    'alert-type' => 'success'
                    );
            
            }else{
            $notification = array(
                'status'=>0,
                'message' => 'Please Try again',
                'alert-type' => 'error'
                );
        }
        }
        return response()->json($notification);
    }
}
new Functions();