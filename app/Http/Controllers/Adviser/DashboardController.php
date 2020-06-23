<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\User_meta;
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
             
              return Redirect::to('/advisor_Profile')->with($notification);

    }
    public function update_data(Request $r){
       
     
        $data = array( 
            'category_id'=>$r->advisortype,   
            'question' =>json_encode(array(
            'lincensenumber'=>$r->lincensenumber,
           'How_Did'=>$r->How_Did,
           'ref'=>$r->ref,
           'What_database'=>$r->What_database,
           'lookingforholastic'=>$r->lookingforholastic,
           'mostinterested'=>$r->mostinterested,
           'status'=>$r->status,
           'assets'=>$r->assets,
           'age'=>$r->age,
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
        
         return Redirect::to('/advisor_Profile')->with($notification);

    }
    
}
