<?php

namespace App\Http\Controllers\UI\Nft;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Nft;
use URL;

class NFTController extends Controller
{
    public function create(){
        return view('UI.nft.createNFT');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);
        $nft = new Nft;
        $nft->userId = auth()->user()->id;
        $nft->title = $request->title;
        $nft->description = $request->description;
        $nft->price = $request->price;
        if($request->hasFile('image')) {
            $request->file('image')->store('NftImages', 'public');
            $path = URL::to('/').'/storage/NftImages/'.$request->file('image')->hashName();
            $nft->image = $path;
        }
        $res = $nft->save();
        if($res)
            return redirect()->back()->with(['success'=>'NFt successfully uploaded.']);
        else
            return redirect()->back()->withErrors(['error'=>'NFT not upload.'])->withInput();
    }
}
