<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function doctor_type(){
        return array("Hematologists","Gastroenterologists","Family_Physicians","Nephrologists","Neurologists","Oncologists","Ophthalmologists","Osteopaths","Otolaryngologists","Physiatrists","Emergency_Medicine_Specialists","Cardiologists");
    }
}
