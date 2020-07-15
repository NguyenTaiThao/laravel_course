<?php

namespace App\Http\Controllers\backend\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("backend.login");
    }

    public function postLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;
        
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('index');
        }else{
            Facade::warning(DB::table('users'));
            return redirect()->back()->with("thong-bao", "Email hoặc mật khẩu không đúng")->withInput();
        }
    }
}
