<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Timezone;
use App\Libraries\Zooms\Myzoom;
class ZoomController extends Controller
{
    public function index(Request $r){
        $d = new Myzoom;
        $timezone = Timezone::all();
        return view('zoom.index',compact('timezone'));
    }
    public function store(Request $r){
        $d = new Myzoom;
        $data = $d->createAMeeting($r->input());
        print_r($data);
    }
}
