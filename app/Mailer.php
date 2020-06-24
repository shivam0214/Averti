<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
    //
    protected $table = 'mails';
    protected $fillable = [
        'user_id', 'fullname', 'subject','body','from', 'to', 'is_attachment', 'is_status', 'cretaed_at'
    ];

}
