<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view("frontend.index");
    }

    public function about(){
        return view("frontend.about.about");
    }

    public function checkout(){
        return view("frontend.checkout.checkout");
    }

    public function cart(){
        return view("frontend.cart.cart");
    }

    public function complete(){
        return view("frontend.complete.complete");
    }

    public function contact(){
        return view("frontend.contact.contact");
    }

    public function detail(){
        return view("frontend.detail.detail");
    }

    public function shop(){
        return view("frontend.shop.shop");
    }
}
