<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\User_meta;
use Auth;
use App\UserRequest;
use App\Contact;
use App\Disease;
use App\Staff_booking;

use App\Categories;

use Redirect;

class User_to_staff_bookingController extends Controller
{ 
    public function staff_booking(){
            $disease_list=Disease::get();
            $data=[];
            foreach($disease_list as $list){
                $data[] = $list;
            }
        //    dd($data);
        //    die;
            return view('User.user_staff_booking',compact('data'));
     }
}
