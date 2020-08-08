<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Datatables;
use Auth;
use DB;
use App\User;
use App\User_meta;
use App\Disease;
use App\Staff_booking;
use Redirect;


class NotificationController extends Controller
{
    public function index(){
        $disease_list=Disease::get();
        $data=[];
        foreach($disease_list as $list){
            $data[] = $list;
        }
    //    dd($data);
    //    die;
        return view('user_disease.user_issue',compact('data'));
    }

    public function show_disease(Request $r){
        $staff=Disease::where('id',$r->disease_id)->get();
        $data=[];
        foreach($staff as $list){
            $data[] = $list['user_id'];
        }
        $s_name=User::where('id',$data)->get();
        $value='';
        foreach($s_name as $list){
            $value = $list;
        } 
        return response()->json([
            'message' => 'Staff here',
            'result'    => $value
        ]);
        exit;
}
    public function staff_booking(Request $r){
        $data=array(
        'staff_id'=>$r->staff_id,
        'advisor_id'=>$r->advisor_id,

        'disease_id'=>$r->disease_id,
        'description'=>$r->description,
        'picture'=>$r->profile_image,
        'user_id'=>Auth::user()['id'],
        );
        //print_r($data);die;
        $users = Staff_booking::create($data);
        if($users){
            $notification = array(
             'message' => 'Staff Book Sucsessfully',
             'alert-type' => 'success'
             );
            }       
    return Redirect::to('/notification')->with($notification);
    }
}
