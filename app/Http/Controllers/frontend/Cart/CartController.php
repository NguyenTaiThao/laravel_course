<?php

namespace App\Http\Controllers\frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function checkout(){
        return view("frontend.checkout.checkout");
    }

    public function cart(){
        return view("frontend.cart.cart");
    }

    public function complete(){
        return view("frontend.complete.complete");
    }
}
