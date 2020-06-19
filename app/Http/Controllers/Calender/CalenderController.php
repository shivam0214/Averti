<?php

namespace App\Http\Controllers\Calender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zenapply\Calendly\Calendly;

class CalenderController extends Controller
{
  public function home(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => "https://calendly.com/api/v1/users/me/event_types",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "X-TOKEN: HDLGGEOJAQE6ATBNQZOVJGJ4B4HK2TY7"
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$res= json_decode($response,true);
    return view('Calendar.calendar',compact('res'));
  }

    public function text(){
 

    }
    
  }
