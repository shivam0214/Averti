<?php

namespace App\Http\Controllers\Frontform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
class AdvisorquestionController extends Controller
{
    public function home(){
        return view('frontview/advisorquestion/advisorquestion');
    }

    public function question(Request $r){
        $form_data=array(
            'firstname'=>$r->firstname,
            'lastname'=>$r->lastname,
            'email'=>$r->email,
            'Company'=>$r->Company,
            'Phone_number'=>$r->Phone_number,
            'Street_Address'=>$r->Street_Address,
            'City'=>$r->City,
            'State'=>$r->State,
            'Postal_code'=>$r->Postal_code,
            'country'=>$r->country,
            'country'=>$r->country,
            'How Did You Hear About Us?'=>$r->selectSm,
            'Lincense Number'=>$r->Lincense_Number,
            'What database program  do you currently Use'=>$r->select_data,
        );
        $form['q_for']='admin';
        $form['questions']=json_encode($form_data);
        // print_r($form);
        // die;
        $form=Question::insert($form);
        return view('Adviser.dashboard');
    }
}
