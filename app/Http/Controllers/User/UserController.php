<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\User_meta;
use Auth;
use App\UserRequest;
use Redirect;

class UserController extends Controller
{
    
    public function user(){
        $users = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get();
        return view('User.listuser',compact('users'));
    }
    public function add_user(){
        return view('User.adduser');
    }
    public function contacts(){
        return view('User.contacts');
    }
    public function view_profile($id){
        $data = User::where('id',$id)->get();
        $data = $data[0];
        $question_data= json_decode($data['single']->question);
        return view('User.view_profile',compact('data','question_data'));
    }
    public function advisor_request(){
            $advisor=Auth::user()->category_id;
            $value=  user::where(['role_id'=>2,'category_id'=>$advisor])->get();
            return view('User.advisor_request',compact('value'));
    }
      public function advisor_request_send(Request $r){
            $id=Auth::user()->id;
            $check=UserRequest::where(['user_id'=>$id])->count();
            if($check>0){
                $notification = array(
                    'message' => 'You have already sent a request',
                    'alert-type' => 'info'
                    );
               }else{
            $advisor = $r->id;
            $form_data=array(
                'user_id'=>$id,
                'advisor_id'=>$advisor
            );
            $userrequests = UserRequest::create($form_data);
            if($userrequests){
            $notification = array(
                 'message' => 'Sent Request',
                 'alert-type' => 'success'
                 );
            }
        }
            return Redirect::to('/advisor_request')->with($notification);
 
        }
    public function mail(){

        return view('mail.new_mail');
    }
    public function chat(){
        $img = User_meta::where('user_id',Auth::user()['id'])->get();
        
        Auth::user()['profile'] = $img[0]['profile_image'];
        
        if(Auth::user()['role_id']==3){
        $users = User::where(['id'=>Auth::user()['perent_id'],'role_id'=>2])->get();
        }
        else{
            $users = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get();
        }
        return view('chat.chat',compact('users'));
    }
}
