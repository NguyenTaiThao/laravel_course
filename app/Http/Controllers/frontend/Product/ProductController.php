<?php

namespace App\Http\Controllers\frontend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(){
        return view("frontend.detail.detail");
    }

    public function shop(){
        return view("frontend.shop.shop");
    }
}
