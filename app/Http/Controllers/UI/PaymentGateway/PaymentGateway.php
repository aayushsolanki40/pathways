<?php

namespace App\Http\Controllers\UI\PaymentGateway;

use App\Http\Controllers\Controller;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use App\models\Nft;
use App\models\User;

class PaymentGateway extends Controller
{
    public function checkout ($nftId = 0){
        $nft = Nft::find($nftId);
        if(!$nft)
        return redirect()->back()->withInput();
        $nft->user = User::find($nft->userId);
        return view('UI.gateway.checkout')->with(['nft'=>$nft]);
    }

    public function makePayment(){
        $invoice_no = 'INV2-Z56S-5LLA-Q52L-CPZ5';
        $provider = new PayPalClient;
        $status = $provider->generateQRCodeInvoice($invoice_no);
        print_r($status);
    }
}
