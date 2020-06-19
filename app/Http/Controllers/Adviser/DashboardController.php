<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
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
        $user = User::findByID($r->id);
        $form_data=array(
            'name'=>$r->firstname,
            'last_name'=>$r->lastname,
            'email'=>$r->email,
            );
        print_r($form_data);
        die;    
    }
}
