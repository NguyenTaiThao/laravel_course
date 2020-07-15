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

    public function contact(){
        return view("frontend.contact.contact");
    }

    
}
