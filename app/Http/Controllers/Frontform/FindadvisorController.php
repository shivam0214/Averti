<?php

namespace App\Http\Controllers\Frontform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindadvisorController extends Controller
{
    public function home(){
        return view('frontview/findadvisor/findadvisor');
    }
}
