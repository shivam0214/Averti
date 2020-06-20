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
  CURLOPT_URL => "https://calendly.com/api/v2/users/me/events",
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
echo $response;die;
$events= json_decode($response,true);


foreach ($events as $record):
	$record = $record['attributes'];
	$et['title'] = $record['name'];
	$et['start'] = date('Y-m-d',strtotime($record['created_at']));
	$et['end'] = date('Y-m-d',strtotime($record['created_at']));
	$et['class'] = 'bg-info';
	
$s[] = $et;
endforeach;
$s= json_encode($s,true);
    return view('Calendar.calendar',compact('s'));
  }

    public function text(){
 

    }
    
  }
