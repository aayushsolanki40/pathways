<?php

namespace App\Http\Controllers\UI\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('UI.auth.login');
    }

    public function checkAuth(Request $request){

    }

    public function signUp(){
        return view('UI.auth.signUp');
    }
}
