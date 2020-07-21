<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;

use App\User;
use App\User_meta;
use App\Professional;

class Health_staffController extends Controller
{
    public function add_staff(){
        return view('health_staff.add_staff');
    }

    public function add_staff_details(Request $r){
        $check=User::where('email',$r->email)->count();
        if($check>0){
                $notification = array(
                 'message' => 'Email already exit',
                 'alert-type' => 'warning'
                 );
                   }
        else{
            $user=array(
                'name'=>$r->name,
                'email'=>$r->email,
                'middle_name'=>$r->middle_name,
                'last_name'=>$r->last_name,
                'role_id'=>4,
                'perent_id'=>Auth::user()['id'],
               );
            $user_meta=array(
                'date_of_birth'=>$r->date_of_birth,
                'age'=>$r->age,
                'phone_no'=>$r->phone_no,
                'mobile_num'=>$r->mobile_num,
                'address'=>$r->address,
                'city'=>$r->city,
                'state'=>$r->state,
                'country'=>$r->country,
                'pincode'=>$r->pincode,
                'profile_image'=>$r->profile_image,
            );
            $professional=array(
                'experience'=>$r->experience,
                'specialization'=>$r->specialization,
                'designation'=>$r->designation,
            ); 
            $users = User::create($user);
            $user_meta['user_id']=$users['id'];
            $set = User_meta::create($user_meta);
            $professional['user_id']=$users['id'];
            $data=Professional::create($professional);
            if($data){
                $notification = array(
                 'message' => 'Data insert Sucsessfully',
                 'alert-type' => 'success'
                 );
                }       
        }
        return Redirect::to('/add_staff')->with($notification);


    }
}
