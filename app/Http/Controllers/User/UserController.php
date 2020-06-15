<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function user(){

        return view('User.listuser');
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
