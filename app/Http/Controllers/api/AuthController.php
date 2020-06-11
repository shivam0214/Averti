<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Mail\SendEmail;


class AuthController extends Controller
{
    public function sendmail(Request $r){
       $email = $r->email;
       $usertype = $r->usertype;
       if($usertype=='user'){
        $data['url'] = 'addprofile';
        $data['type']='Welcome To User Verification';
       }else{
        $data['url'] = 'advisor';
        $data['type']='Welcome To Advisor Verification';
       }
       $check=User::where('email',$r->email)->count();
       if(!$check){
        $subject ="Welcome to Averti verification";
        $res = array('status'=>true,'message'=>'Please check your email for complete this process');
        $ss = Mail::to($r->email)->send(new SendEmail($subject,'verify',$data));
        if($ss){
            $res['mail'] = "sent";
        }else{
            $res['mail'] = "not sent";
        }
       }else{
        $res = array('status'=>false,'message'=>'You already register with us');
       }
       
       return response()->json($res);
        
    }
}
