<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use URL;

class AdminUIController extends Controller
{
    public function index(){
        $total_data['total_user'] = User::where('is_admin', 0)->count();
        $total_data['total_trans'] = Transaction::count();
        return view('admin.home.home')->with($total_data);
    }

    public function profile(){
        $user = auth()->user();
        return view('admin.profile.index')->with(['user'=>$user]);
    }

    public function updateprofile(Request $request){
        $user = auth()->user();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        if(isset($request->password)&&!empty($request->password))
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->back();
    }
}
