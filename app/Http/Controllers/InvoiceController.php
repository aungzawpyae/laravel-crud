<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
class InvoiceController extends Controller
{
    public function invoice(){
        // $pdf = PDF::loadView('order.invoice');//->setOptions(['defaultFont' => 'Roboto']);
        // return $pdf->download('invoice.pdf');
        
        return view('order.invoice',);
        
        

    }


    
}
