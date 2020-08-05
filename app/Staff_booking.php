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
}
