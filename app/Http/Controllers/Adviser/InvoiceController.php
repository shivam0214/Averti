<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice(){
        return view('sales.invoice');
    }
    public function invoice_list(){
        return view('sales.invoice_list');
    }
}
