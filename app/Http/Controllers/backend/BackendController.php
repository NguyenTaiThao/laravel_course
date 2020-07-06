<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index(){
        return view("backend.index");
    }

    // category controller
    public function category(){
        return view("backend.category.category");
    } 

    public function addcategory(){
        return view("backend.category.addcategory");
    }
    
    public function editcategory(){
        return view("backend.category.editcategory");
    } 
    
    // user controller
    public function user(){
        return view("backend.user.listuser");
    }

    public function addUser(){
        return view("backend.user.adduser");
    }

    public function editUser(){
        return view("backend.user.edituser");
    }

    // product controller
    public function product(){
        return view("backend.product.listproduct");
    }

    public function addproduct(){
        return view("backend.product.addproduct");
    }

    public function editproduct(){
        return view("backend.product.editproduct");
    }

    public function order(){
        return view("backend.order.order");
    }

    public function processed(){
        return view("backend.order.processed");
    }
}
