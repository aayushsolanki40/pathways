<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{
    public function loginPage(){
        return view('admin.auth.LoginPage');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials['is_admin'] = true;
        $credentials['email'] = $request->email;
        $credentials['password'] = $request->password;

        if (Auth::attempt($credentials)) {

            return redirect()->route('admin.homepage');
        }
        return redirect()->route('admin.login')->withError(['loginerror'=>'Invalid email or password.']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage');
    }
}
