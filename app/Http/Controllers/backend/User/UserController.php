<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
    
}
