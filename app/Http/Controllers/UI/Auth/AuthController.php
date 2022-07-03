<?php

namespace App\Http\Controllers\UI\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('UI.auth.login');
    }

    public function checkLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('ui.home')->with(['success'=>'Login success']);
        }
        else{
            return redirect()->back()->withErrors(['error'=>'Invalid Crediatials.']);
        }
    }

    public function signUp(){
        return view('UI.auth.signUp');
    }

    public function publishSignUp(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => 'required',
            'confPassword' => 'required'
        ]);

        $user = new User;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
        if($user)
            return redirect()->back()->with(['message'=>'Signup done successfully.']);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('ui.auth.login');
    }
}
