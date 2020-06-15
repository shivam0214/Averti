<?php

namespace App\Http\Controllers\Calender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zenapply\Calendly\Calendly;

class CalenderController extends Controller
{
    
    public function calender(){
      //  $c = new Calendly("HDLGGEOJAQE6ATBNQZOVJGJ4B4HK2TY7");

        return view('Calender.calendar');
    }
}
