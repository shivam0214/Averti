<?php

namespace App\Http\Controllers\Frontform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontformController extends Controller
{
    public function index(){
        return view('frontview.landing');
    }
}
