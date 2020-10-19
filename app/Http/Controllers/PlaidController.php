<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Datatables;
use Auth;
use DB;
use App\User;
use App\User_meta;
use App\Disease;
use App\Staff_booking;
use Redirect;
use App\Libraries\plaid\Plaid;

class PlaidController extends Controller
{
    public function plaid_view(){
        return view("plaid.plaid");      
    }
    public function transactions(Request $r){
        $get = new Plaid;
        $data = $get->transactions();     
        dd($data);die;       
    } 
    public function balance(Request $r){
        $get = new Plaid;
        $data = $get->balance();     
        dd($data);die;       
    }

    public function reterive_income(){
        $get = new Plaid;
        $data = $get->reterive_income();     
        dd($data);die;       
        
    }
    public function reterive_auth(){
        $get = new Plaid;
        $data = $get->reterive_auth();     
        dd($data);die;       
        
    }
    public function reterive_identity(){
        $get = new Plaid;
        $data = $get->reterive_identity();     
        dd($data);die;       
        
    }

    public function categories(){
        $get = new Plaid;
        $data = $get->categories();     
        dd($data);die;       
        
    }
    public function investment_holding(){
        $get = new Plaid;
        $data = $get->investment_holding();     
        dd($data);die;       
        
    }
    public function investment_transactions(){
        $get = new Plaid;
        $data = $get->investment_transactions();     
        dd($data);die;       
        
    }
}
