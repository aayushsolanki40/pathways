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
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.payment'),
                "cancel_url" => route('cancel.payment'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "1000.00"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('make.payment.nft')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('make.payment.nft')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}
