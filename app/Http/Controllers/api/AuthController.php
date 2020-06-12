<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Mail\SendEmail;
use Hash;


class AuthController extends Controller
{
    public function sendmail(Request $r){
       $email = $r->email;
       $usertype = $r->usertype;
       $role = "";
       if($usertype=='user'){
        $data['url'] = 'addprofile';
        $data['type']='Welcome To User Verification';
        $role = 3;
       }else{
        $data['url'] = 'advisor';
        $data['type']='Welcome To Advisor Verification';
        $role = 2;
       }
       $check=User::where('email',$r->email)->count();
       if(!$check){
        $subject ="Welcome to Averti verification";
        $res = array('status'=>true,'message'=>'Please check your email for complete this process');
        $token = md5($r->email);
        $craete =  User::create([
            'name' => $r->email,
            'email' =>$r->email,
            'role_id' => $role,
            'password' => Hash::make($r->email),
            'verify_key' => $token
        ]);
        $data['verify_key'] = $token;
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

        public function verify($token){
            $check=User::where('verify_key',$token)->count();
            if($check!==0){
            $g = User::where('verify_key',$token)->get();
            User::where('verify_key',$token)->update(['verify_key'=>null]);
            if($g[0]['role_id']==2){
                $u = 'advisor';
            }else{
                $u = 'addprofile';
            }
                return redirect('/#/'.$u);
            }else{
                return view('notfound');
            }
        }
}
