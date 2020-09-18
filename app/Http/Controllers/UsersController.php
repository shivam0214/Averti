<?php
   namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Datatables;
use App\Auth;
use DB;
use App\User;
use App\User_meta;

class UsersController extends Controller
{
   public function add_user(Request $request){
    
        $userdata = new User;
        $userdata->email=$request->email;
      if(User::where('email',$request->email)->exists())
         {
          return back()->with('status','Already Exits');
      } 
      else{
        $userdata->name=$request->name; 
        $userdata->email=$request->email;           
        $userdata->password=bcrypt($request->password);
        $userdata->middle_name=$request->middle_name;       
        $userdata->last_name=$request->last_name;
          $userdata->save();
        $last_insert_id = $userdata->id;

        if($last_insert_id){
        $user_metadata = new User_meta;
        $user_metadata->user_id= $last_insert_id;
        $user_metadata->date_of_birth=$request->date_of_birth;
        $user_metadata->age= $request->age;
        $user_metadata->disease=$request->disease;
        $user_metadata->bloodgroup=$request->bloodgroup;
        $user_metadata->home_no=$request->home_no;
        $user_metadata->phone_no=$request->phone_no;
        $user_metadata->mobile_num=$request->mobile_num;
        $user_metadata->address=$request->address;
        $user_metadata->city=$request->city;
        $user_metadata->state=$request->state;
        $user_metadata->country=$request->country;
        $user_metadata->zipcode=$request->zipcode;
        $user_metadata->profile_image=$request->profile_image;
        $user_metadata->smokers=$request->smokers;
        $user_metadata->save();
      }
      }
     // print_r($user_metadata);
      //  return back()->with('message','Insert successfully.');
       return response()->json(['success'=>'Data is successfully added']);
       //die;
    }
   public function index(){
      return Datatables::of(User::all())->make(true);
    }
   public function create(){  
        return view('users.user_list');
   }
   public function edit($uuid){
      $user = User::findByUUID($uuid);
      return view('users.edit',compact(['user']));
   }
   public function update(Request $request){
      $user_d = User::findByUUID($request->uuid);  
      $user_d->name=$request->name; 
      $user_d->email=$request->email;           
      $user_d->middle_name=$request->middle_name;       
      $user_d->last_name=$request->last_name;
      $user_d->save();

      $d=$request->date_of_birth;
      $data= array
      (  'age'=>$request->age,
         'home_no'=>$request->home_no,
         'disease'=>$request->disease,
         'date_of_birth'=>$d,     
         'bloodgroup'=>$request->bloodgroup,
         'home_no'=>$request->home_no,
         'phone_no'=>$request->phone_no,
         'profile_image'=>$request->profile_image,
         'mobile_num'=>$request->mobile_num,
         'address'=>$request->address,
         'city'=>$request->city,
         'state'=>$request->state,
         'country'=>$request->country,
         'zipcode'=>$request->zipcode,
         'smokers'=>$request->smokers,   
      );
      $user = DB::table('user_meta')->where('user_id',$user_d->id)->update($data);      
      return back()->with('message','Update successfully.');
   }

/* -------------------------------------------------------------------------------------------------------------------------- */
############## for the front user ###################### registration please code here for font 

/***************************************************************************************************************************** */






}
