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
    public function mail(){
        return view('mail.mail');
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
    public function add_to_group_users(Request $r){
        $group_users_id=$r->group_users_id;
        $check=User_group::where(['group_id'=>$group_users_id])->get();
        $ids=[];
        foreach($check as $user_ids){
            $ids[]=$user_ids['user_id'];
        }
        $contacts=User::whereNotIn('id',$ids)->where(['perent_id'=>Auth::user()['id'],'role_id'=>3])->get();       
        return view('mail.add_user_to_group',compact('contacts','group_users_id'));
    }
    
    public function group_list(Request $r)
    {    
    $data=array('user_id'=>$r->id,'group_id'=>$r->group_users_id);
    $check=User_group::where(['group_id'=>$r->group_users_id,'user_id'=>$r->id])->count();
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
        $group_names=Group::where('id',$id)->get();
        foreach($group_names as $user_group){
            $group_name =$user_group['group_name'];
        }
       // print_r($group_name);die;
       
            return view('mail.show_list',compact('value','group_name')) ;
    }  
}
