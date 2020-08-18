<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\Disease;
use App\User_meta;
use App\Professional;
use App\Staff_booking;

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
    public function staff_list(){
        $staff_list=User::where('role_id',4)->get();
        $data=[];
        foreach($staff_list as $list){
            $data[] = $list;
        }
       return view('health_staff.staff_list',compact('data'));   
    }

    public function view_staff($id){
        $staff_list=User::where('id',$id)->get();
        $staff_list = $staff_list[0];
        return view('health_staff.edit_staff_details',compact('staff_list'));   
    }

    public function update_details(Request $r){
        $des = explode('|',$r->disease);
        if(!empty($des)){
            foreach($des as $d){
                if(Disease::where(['user_id'=>$r->id,'disease'=>$d])->count()==0){
                    Disease::create(['user_id'=>$r->id,'disease'=>$d]);
                }
            }            
        }
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
            'zipcode'=>$r->zipcode,
            'profile_image'=>$r->profile_image,
        );
        $professional=array(
            'experience'=>$r->experience,
            'specialization'=>$r->specialization,
            'designation'=>$r->designation,
        ); 
        $users = User::where('id',$r->id)->update($user);
        $users_meta=User_meta::where('user_id',$r->id)->update($user_meta);
        $professional_data=Professional::where('user_id',$r->id)->update($professional);

        if($professional_data){
            $notification = array(
             'message' => 'Data update Sucsessfully',
             'alert-type' => 'success'
             );
            }
        else{
            $notification = array(
                'message' => 'Data not update Sucsessfully',
                'alert-type' => 'success'
                );  
          }         
            return Redirect::to('/staff_list')->with($notification);
    }

    public function delete_data($id){
        $staff_list=User::where('id',$id)->delete();
        $users_meta=User_meta::where('user_id',$id)->delete();
        $disease=Disease::where('user_id',$id)->delete();
        $professional_data=Professional::where('user_id',$id)->delete();
        $disease=Disease::where('user_id',$id)->delete();

        if($professional_data){
            $notification = array(
             'message' => 'Record deleted successfully',
             'alert-type' => 'success'
             );
            }
            return Redirect::to('/staff_list')->with($notification);

    }

    public function staff_user(){
         $user_issue=Staff_booking::get();
        $value=[];
        foreach($user_issue as $s_list){
            $value[]= $s_list;
        }  
        return view('health_staff.staff_user',compact('value'));
    }

    public function staff_detail($id){
        $details=Staff_booking::where('staff_id',$id)->get();
             return view('health_staff.staff_details',compact('details'));
    }
}
