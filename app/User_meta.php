<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_meta extends Model
{
    use \BinaryCabin\LaravelUUID\Traits\HasUUID;
    protected $table = 'user_meta';
    protected $fillable = [
        'user_id','age', 'bloodgroup', 'address','city','state','country','zipcode','smokers','disease','phone_no','home_no','mobile_num','date_of_birth','profile_image','company','category_id','question'
    ];
    protected $hidden = [
        'user_id',
    ];  
    public function metadata(){
        return $this->hasMany('App\User');
    }  
    
}
