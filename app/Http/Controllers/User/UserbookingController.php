<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Booking;
use App\Bookingsetting;
use Auth;
class UserbookingController extends Controller
{
    public function index(){
        $bookingav = Bookingsetting::where('user_id',Auth::user()['perent_id'])->get();
        return view('booking.booking',compact('bookingav'));
    }
}
