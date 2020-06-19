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

        return view('chat.chat');
    }
}
