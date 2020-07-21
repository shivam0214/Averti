<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $primaryKey ='id';
    Protected $table = 'professionals';

    protected $fillable = [
        'user_id','experience','specialization','designation',
    ];}
