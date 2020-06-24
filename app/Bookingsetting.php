<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingsetting extends Model
{
    protected $fillable = ["languages","patient_type","doctor_type","where","available","user_id"];
}