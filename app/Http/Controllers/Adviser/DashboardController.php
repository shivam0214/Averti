<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\User_meta;
use App\UserRequest;
use App\Notifications\RequestNotification;


use Redirect;

class DashboardController extends Controller
{
    
    public function index(){   
        
        return view('Adviser.dashboard');
    }
    /** Advisor Profile */
    public function advisor_profile(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->get();
        $user = $user[0];
        $question_data= json_decode($user['single']->question);                
        //print_r($question_data);
        return view('advisor_profile.profile',compact('user','question_data'));
        
    }
    
    public function update_profile(Request $r){
        $form_data = User::findByUUID($r->uuid);
        $form_data->name=$r->name;
        $form_data->last_name=$r->lastname;
        $form_data->email=$r->email;
        $form_data->save();
        $data = array( 
            'profile_image'=>$r->profile_image,
            'company'=>$r->company,
            'phone_no'=>$r->phone_no,
            'address'=>$r->address,
            'city'=>$r->city,
            'state'=>$r->state,
            'zipcode'=>$r->zipcode,
            'country'=>$r->country,
            'category_id'=>$r->advisortype,   
            );
            $user = DB::table('user_meta')->where('user_id',$form_data->id)->update($data);      
            if($user){
                $notification = array(
                 'message' => 'Profile data updated successfully!',
                 'alert-type' => 'success'
                 );             
                }else{                        
                $notification = array(
                 'message' => 'Please Try again',
                 'alert-type' => 'error'
             );
                }
             
              return Redirect::to('/Profile')->with($notification);

    }
    public function update_advisor_data(Request $r){            
        $data = array( 
            'category_id'=>$r->advisortype,
            'question' =>json_encode(array(
            'lincensenumber'=>$r->lincensenumber,
           'How_Did'=>$r->How_Did,
           'age'=>$r->age,
           'ref'=>$r->ref,
           'What_database'=>$r->What_database,
           'lookingforholastic'=>$r->lookingforholastic,
           'mostinterested'=>$r->mostinterested,
           'status'=>$r->status,
           'assets'=>$r->assets,
           'life_happiness'=>$r->life_happiness,
           'planning'=>$r->planning,
           'financial'=>$r->financial,
           'retirement_goal'=>$r->retirement_goal,
           'moneymeaning'=>$r->moneymeaning,
           'desisionmaker'=>$r->desisionmaker,
           'risk'=>$r->risk,
           'when'=>$r->when,
           'services'=>$r->services)));
           $user = DB::table('user_meta')->where('user_id',$r->user_id)->update($data);  
           if($user){
           $notification = array(
            'message' => 'Profile data updated successfully!',
            'alert-type' => 'success'
            );
           }else{
                   
           $notification = array(
            'message' => 'Please Try again',
            'alert-type' => 'error'
        );
           }
        
         return Redirect::to('/Profile')->with($notification);
    }
    public function update_user_data(Request $r){            
        $data = array( 
            'category_id'=>$r->advisortype,  
            'age'=>$r->age,
            'question' =>json_encode(array(
               'status'=>$r->status,
                'Whatwouldyoulike'=>$r->Whatwouldyoulike,
                'occupation'=>$r->occupation,    
            )));
           $user = DB::table('user_meta')->where('user_id',$r->user_id)->update($data);  
           if($user){
           $notification = array(
            'message' => 'Profile data updated successfully!',
            'alert-type' => 'success'
            );
           }else{
                   
           $notification = array(
            'message' => 'Please Try again',
            'alert-type' => 'error'
        );
           }
        
         return Redirect::to('/Profile')->with($notification);
    }
    
    public function user_request(User $user_req ){
        $user_req=Auth::user();
        // print_r($user_req);
        // die;
        
        $advisor=UserRequest::where(['advisor_id'=>Auth::user()->id,'status'=>0])->get();
        Auth::user()->notify(new RequestNotification($user_req));

        $ids = [];
        foreach($advisor as $user_details){
             $ids[] =$user_details['user_id'];
         }
         
        $value= user::where(['role_id'=>3])->whereIn('id',$ids)->get();
        return view('Adviser.user_request',compact('value'));
    }

    public function accept_userreq(Request $r){
        $advisor=Auth::user()->id;
        $data=array('perent_id'=>$advisor);
        $insert =User::where('id',$r->id)->update($data);
        UserRequest::where(['advisor_id'=>$advisor,'user_id'=>$r->id])->update(['status'=>1]);
        if($insert){

            $notification = array(
             'message' => 'Thanks',
             'alert-type' => 'success'
             );
            }
            return Redirect::to('/user_request')->with($notification);
    }
    public function templates(){
        return view('template.template');

    }
  }
