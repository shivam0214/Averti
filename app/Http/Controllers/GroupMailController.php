<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Group;
use App\User_group;
use Redirect;


class GroupMailController extends Controller
{
    public function mail_template(){
        return view('mail.template');
    }
    public function mail_temp_list(){
        return view('mail.list');
    }
    public function setting(){
        // return view('mail.setting');
    }

    public function add_group(Request $r){
          $check=Group::where(['advisor_id'=>Auth::user()->id,'group_name'=>$r->group_name])->count();
        if($check>0){
            $notification = array(
                'message' => 'This group name already created try another name',
                'alert-type' => 'info'
                );
        }       
        else
        {
            $data=array('advisor_id'=>Auth::user()->id,'group_name'=>$r->group_name);
            // print_r($data);
            // die;
         
            $add_group=Group::create($data);
            if($add_group){
                $notification = array(
                 'message' => 'Group added successfully!',
                 'alert-type' => 'success'
                 );             
                }else{                        
                $notification = array(
                 'message' => 'Please Try again',
                 'alert-type' => 'error'
             );
            }
        }
        return Redirect::to('/Group')->with($notification);
    }

    public function groups(Request $r){
        $groups = Group::where(['advisor_id'=>Auth::user()->id])->get();
        $contacts = User::where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get(); 
        return view('mail.group',compact('groups','contacts'));
    }
    
    public function group_list(Request $r)
    {    
    $data=array('user_id'=>$r->id,'group_id'=>$r->groupid);
    $check=User_group::where(['group_id'=>$r->groupid,'user_id'=>$r->id])->count();
    if($check>0){
        $notification = array(
            'message' => 'This user is already added on this group',
            'alert-type' => 'info'
            );
    }
    else{
    $add_data=User_group::create($data);

    if($add_data){
        $notification = array(
         'message' => 'User added successfully!',
         'alert-type' => 'success'
         );             
        }else{                        
        $notification = array(
         'message' => 'Please Try again',
         'alert-type' => 'error'
     );
    }
}
    return Redirect::to('/Group')->with($notification);
    }
   
    public function show_list($id){
        $groups_user=User_group::where('group_id',$id)->get();
        $ids=[] ;
                foreach($groups_user as $user_details){
            $ids[] =$user_details['user_id'];
        }
        $value= user::where(['role_id'=>3])->whereIn('id',$ids)->get();
            return view('mail.show_list',compact('value')) ;
    }  
  
    public function group_compose_mail(Request $r){
        $templates = DB::select("SELECT id, `title` FROM mailtemplate WHERE user_id=".Auth::user()->id);

        $groups_usermail=User_group::where('group_id',$r->gmid)->get();
        $ids=[] ;
            foreach($groups_usermail as $user_details){
            $ids[] =$user_details['user_id'];
            }
        $value= user::where(['role_id'=>3])->whereIn('id',$ids)->get();
        $myemails = '';
        foreach($value as $email){
         $myemails .= $email['email'].',';
            }
            $myemails = rtrim($myemails);
            return view('mail.group_mail',compact('myemails','templates'));        
    }
    
}
