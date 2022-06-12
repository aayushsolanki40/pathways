<?php

namespace App\Http\Controllers\UI\Nft;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NFTController extends Controller
{
    public function create(){
        return view('UI.nft.createNFT');
    }
}
