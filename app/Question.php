<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';
    protected $primaryKey ='id';
    public $timestamps = false;
    
    protected $fillable = [
        'q_for', 'questions',
    ];
 
}
