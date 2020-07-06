<?php

namespace App;
use App\Meeting;
use Illuminate\Database\Eloquent\Model;

class Invitemeeting extends Model
{
    Protected $fillable = ['user_id','advisor_id','mid','status'];
    Protected $table = "invitemeeings";

    public function mymeeting(){
        return $this->belongsTo('App\Meeting','mid','id');
    }
    public function user(){
        return $this->belongsTo('App\User','advisor_id','id');
    }
}
