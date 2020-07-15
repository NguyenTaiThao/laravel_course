<?php

namespace App\Http\Controllers\backend\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        return view("backend.order.order");
    }

    public function processed(){
        return view("backend.order.processed");
    }
}
