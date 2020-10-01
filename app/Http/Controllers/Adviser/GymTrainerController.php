<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class GymTrainerController extends Controller
{
    public function index(){
        return view('gym_trainer_template.index');
    }
    public function about(){
        return view('gym_trainer_template.about');
    }
    public function pricing(){
        return view('gym_trainer_template.pricing');
    }
    public function course(){
        return view('gym_trainer_template.course');
    }
    public function gallery(){
        return view('gym_trainer_template.gym_gallery');
    }
}



