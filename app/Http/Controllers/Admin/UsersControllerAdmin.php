<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FcmNotification;
use App\Models\Notification;
use App\Models\Bankdetail;
use App\Models\Score;
use App\Models\FcmToken;
use App\Models\Commission;

class UsersControllerAdmin extends Controller
{
    public function index(){
        $users = User::where('is_admin', 0)->orderBy('id', 'desc')->get();
        return view('admin.users.index')->with(['users'=>$users]);
    }
}
