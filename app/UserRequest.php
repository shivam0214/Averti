<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    protected $primaryKey ='id';
    Protected $table = '_userrequests';

    protected $fillable = [
        'user_id', 'advisor_id',
    ];
}
