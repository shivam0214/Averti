<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
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
    public function mail(){

        return view('mail.new_mail');
    }
    public function chat(){
        return view('chat.chat');
    }
}
