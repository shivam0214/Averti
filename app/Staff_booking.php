<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_booking extends Model
{
    protected $primaryKey ='id';
    Protected $table = 'staff_bookings';

    protected $fillable = [
        'user_id','disease_id','description','staff','profile_image'
    ];
    public function user_staff_booking(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function usermeta_staff_booking(){
        return $this->belongsTo('App\User_meta','user_id','user_id');
    }
    public function disease_list(){
        return $this->belongsTo('App\Disease','disease_id','id');
    }  
   
}
