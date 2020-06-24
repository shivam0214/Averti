<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
class BookingController extends Controller
{
    public function booking(){
        $language = Language::all();
        return view('booking.booking_schedule',compact('language'));
    }
}
