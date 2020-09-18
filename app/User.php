<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;
    use \BinaryCabin\LaravelUUID\Traits\HasUUID;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','perent_id', 'email','last_name','middle_name', 'password','role_id','verify_key','category_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
     function userdata(){
        return $this->HasOne('App\User_meta','user_id');
    } 
    public function single(){
        return $this->belongsTo('App\User_meta','id','user_id');
    }
    public function req_data(){
        return $this->belongsToMany('App\UserRequest','advisor_id','id');
    }
    public function req_userata(){
        return $this->belongsToMany('App\UserRequest','id','advisor_id');
    }
    public function catname(){
        return $this->belongsTo('App\Categories','category_id','id');
    }
    public function staff_details(){
        return $this->belongsTo('App\Professional','id','user_id');
    } 
    public function disease_details(){
        return $this->belongsTo('App\Disease','id','user_id');
    }  
    
}
