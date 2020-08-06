<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey ='id';
    Protected $table = 'contacts';

    protected $fillable = [
        'user_id','name','email','phone_no','profile_image','social'
    ];}
