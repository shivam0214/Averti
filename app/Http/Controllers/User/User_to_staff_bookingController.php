<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\User_meta;
use Auth;
use App\UserRequest;
use App\Contact;
use App\Categories;

use Redirect;

class User_to_staff_bookingController extends Controller
{ 
    public function staff_booking(){
        return view('User.user_staff_booking');
    }
}
