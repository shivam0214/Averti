<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardController extends Controller
{
    public function index(){
        return view('Adviser.dashboard');
    }

    public function profile(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->get();
        $user = $user[0];
        return view('advisor_profile.profile',compact('user'));
    }
}
