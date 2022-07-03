<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersControllerAdmin extends Controller
{
    public function index(){
        $users = User::where('is_admin', 0)->orderBy('id', 'desc')->get();
        return view('admin.users.index')->with(['users'=>$users]);
    }
}
