<?php

namespace App\Http\Controllers\UI\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Nft;

class HomeController extends Controller
{
    public function index(){
        $nfts = Nft::orderBy('id', 'desc')->get();
        return view('UI.home.index')->with(['nfts'=>$nfts]);
    }
}
