<?php

namespace App\Http\Controllers\UI\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $user = auth()->user();
        return view('UI.user.profile')->with(['user'=>$user]);
    }

    public function myCollections(){
        return view('UI.user.myCollection');
    }

    public function favorite(){
        return view('UI.user.favorite');
    }
}
