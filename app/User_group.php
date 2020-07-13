<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_group extends Model
{
    protected $fillable = ['group_id','user_id'];
    
    public function groupemail(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function groupimg(){
        return $this->belongsTo('App\User_meta','user_id','user_id');
    }

//     public function emailids(){
//        $myemails = '';
//         foreach($emails as $email){
//             $myemails .= $email.',';
//         }
//         $myemails = rtrim($myemails);
// /* it will give you results like this  sam@gmail.com,jais@gmail.com,km@gmao.com */
//     }
}
