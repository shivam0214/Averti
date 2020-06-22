<?php
namespace App\Http\Controllers\Frontform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
use App\User;
use App\Categories;
use Illuminate\Support\Facades\Hash;
use App\User_meta;
use Mail;
use App\Mail\SendEmail;

class FrontformController extends Controller
{
    /** FrontForm Function */ 

    public function index(){
        return view('frontview.landing');
    }
/** Advisor Question Function */
public function questioon_view(){
    $cat = Categories::all();
    return view('frontview/advisorquestion/advisorquestion',compact('cat'));
}

public function question(Request $r){
    $token = md5($r->email);
    $form_data=array(
        'name'=>$r->firstname,
        'last_name'=>$r->lastname,
        'email'=>$r->email,
        'role_id'=>2,
        'perent_id'=>-1,
        'password'=>Hash::make($r->password),
        'verify_key'=>$token
    );
   $usermeta = array( 
    'company'=>$r->companyname,
    'phone_no'=>$r->phonenumber,
    'address'=>$r->streetaddress,
    'city'=>$r->city,
    'state'=>$r->state,
    'zipcode'=>$r->postalcode,
    'country'=>$r->country,
    'category_id'=>$r->advisortype,   
    'question' =>json_encode(array(
    'lincensenumber'=>$r->lincensenumber,
   'How_Did'=>$r->howyouknowboutus,
   'ref'=>$r->ref,
   'What_database'=>$r->databaseselect_data,
   'lookingforholastic'=>$r->lookingforholastic,
   'mostinterested'=>$r->mostinterested,
   'status'=>$r->status,
   'assets'=>$r->assets,
   'age'=>$r->age,
   'life_happiness'=>$r->life_happiness,
   'financial'=>$r->financial,
   'retirement_goal'=>$r->retirement_goal,
   'moneymeaning'=>$r->moneymeaning,
   'desisionmaker'=>$r->desisionmaker,
   'risk'=>$r->risk,
   'when'=>$r->when,
   'services'=>$r->services)));
   $users = User::create($form_data);

   $usermeta['user_id']=$users['id'];
   $set = User_meta::create($usermeta);
   $data['verify_key'] = $token;
    
    $data['type']='Welcome To Advisor Verification';
    $subject ="Welcome to Averti verification";
   
   $ss = Mail::to($r->email)->send(new SendEmail($subject,'verify',$data));
  
        if($set){
            return response()->json(['status'=>1,'msg'=>'Please check your email and Verify the email']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Please try again']);
        }
}
public function checkemail(Request $r){
    $get = User::where('email',$r->email)->count();
    if($get==1){
        
        return response()->json(['status'=>0,'msg'=>'email already exist']);
        
    }else{
        return response()->json(['status'=>1,'msg'=>'']);
    }
}
    /** Find Advisor */
    public function home(){
        return view('frontview/findadvisor/findadvisor');
    }

    public function finadvisor(Request $r){
        $token = md5($r->email);
        $form_data=array(
            'name'=>$r->name,
            'email'=>$r->email,
            'role_id'=>3,
            'verify_key'=>$token
        );
        
        $usermeta = array( 
            'phone_no'=>$r->phone_no,
            'age'=>$r->age,
            'question' =>json_encode(array(
                'status'=>$r->status,
                'Whatwouldyoulike'=>$r->Whatwouldyoulike,
                'occupation'=>$r->occupation,                
            )));
            $users = User::create($form_data);
            $usermeta['user_id']=$users['id'];
            $set = User_meta::create($usermeta);
            $data['verify_key'] = $token;    
            $data['type']='Welcome To User Verification';
            $subject ="Welcome to Averti verification";
        $ss = Mail::to($r->email)->send(new SendEmail($subject,'verify',$data));
        if($set){
            return response()->json(['status'=>1,'msg'=>'Please check your email and Verify the email']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Please try again']);
        }
    }
}
