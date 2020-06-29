<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['user_id','uuid','meeting_id','host_id','topic','status','start_time','mytimezone','start_url','join_url','password','settings','allresult'];

}