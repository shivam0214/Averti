<?php

namespace App\Http\Controllers\Frontform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvisorquestionController extends Controller
{
    public function home(){
        return view('frontview/advisorquestion/advisorquestion');
    }
}
