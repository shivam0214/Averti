<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $primaryKey ='id';
    Protected $table = 'diseases';
    protected $fillable = ['user_id','disease'];


}
