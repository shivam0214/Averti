<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Helper;
use Auth;
use App\Bookingsetting;
use Redirect;
class BookingController extends Controller
{
    public function booking(){
        $language = Language::all();
        $doctor = Helper::doctor_type();
        $bookingav = Bookingsetting::where('user_id',Auth::user()['id'])->get();
        return view('booking.booking_schedule',compact('language','doctor','bookingav'));
    }

    public function bookingsetting(Request $r){
        $data = array(
            "languages"=>json_encode($r->language,JSON_FORCE_OBJECT),
            "patient_type"=>json_encode($r->patient_type,JSON_FORCE_OBJECT),
            "doctor_type"=>json_encode($r->doctor_type,JSON_FORCE_OBJECT),
            "where"=>json_encode($r->where,JSON_FORCE_OBJECT),
            "available"=>json_encode($r->hours,JSON_FORCE_OBJECT),
            "user_id"=>Auth::user()['id'],
        );
        if($r->id==null){
        $get = Bookingsetting::create($data);
        $m = 'Added successfully!';
        }else{
            $get = Bookingsetting::where('id',$r->id)->update($data);
            $m = 'Update successfully!';
        }

        if($get){
            $notification = array(
             'message' => $m,
             'alert-type' => 'success'
             );
            }else{
                    
            $notification = array(
             'message' => 'Please Try again',
             'alert-type' => 'error'
         );
            }
         
          return Redirect::to('/Booking')->with($notification);
    }
}
