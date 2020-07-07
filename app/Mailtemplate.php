<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailtemplate extends Model
{
    //
    protected $table = 'mailtemplate';
    protected $fillable = [
        'user_id', 'title', 'body', 'is_status', 'cretaed_at'
    ];

}
