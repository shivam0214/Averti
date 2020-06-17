<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Timezone;
class ZoomController extends Controller
{
    public function index(Request $r){
        $timezone = Timezone::all();
        return view('zoom.index',compact('timezone'));
    }
    public function store(Request $r){

    }
}
