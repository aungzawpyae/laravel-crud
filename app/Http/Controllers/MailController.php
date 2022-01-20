<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
     public function send()
    {
        $details = [];
       
        Mail::to('user@gmail.com')->send(new \App\Mail\SendMail($details));
        
       
      
        return view('/ui.carts.order-success');
        
    }
}
