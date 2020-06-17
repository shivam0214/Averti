<?php

namespace App\Http\Controllers\Calender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zenapply\Calendly\Calendly;
class CalenderController extends Controller
{
  public function home(){
    return view('Calendar.calendar');
  }
//     public function calender(){
//      //   $c = new Calendly("IGPKBOPFJ2LR7FVDPB3U2EQ7D42PTD2B");
// //$response = $c->registerInviteeCreated("http://foo.com/bar/calendly");
// $c = new Calendly("IGPKBOPFJ2LR7FVDPB3U2EQ7D42PTD2B");
// $response = $c->registerInviteeCreated("http://foo.com/bar/calendly");
// //die;
//     }
    
  }
