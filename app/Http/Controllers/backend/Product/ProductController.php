<?php

namespace App\Http\Controllers\backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    // product controller
    public function product(){
        return view("backend.product.listproduct");
    }

    public function addproduct(){
        return view("backend.product.addproduct");
    }

    public function postaddproduct(AddProductRequest $request){
        return view("backend.product.addproduct");
    }

    public function editproduct(){
        return view("backend.product.editproduct");
    }
}
