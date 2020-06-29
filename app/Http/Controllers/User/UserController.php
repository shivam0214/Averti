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
    public function view_profile(){
        return view('User.view_profile');
    }
    public function mail(){

        return view('mail.new_mail');
    }
    public function chat(){
        if(Auth::user()['role_id']==3){
        $users = User::where(['id'=>Auth::user()['perent_id'],'role_id'=>2])->get();
        }
        else{
            $users = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get();
        }
        return view('chat.chat',compact('users'));
    }
}
