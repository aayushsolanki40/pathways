<?php
namespace App\Http\Controllers;

use App\Models\Nft;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
class PayPalPaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        $product = [];
        $totalAmt = 0;
        $invoice_id  = hash('sha256', microtime() );
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->invoice_no = $invoice_id;
        $order->invoice_description = "Order #{$invoice_id} Bill";
        $order->active = 0;
        $order->save();

        foreach($request->name as $key => $elem){
            $totalAmt += $request->price[$key];
            OrderItem::insert(['order_id'=>$order->id, 'item_id'=>$request->code[$key]]);
            $product['items'][] = [
                    'name' => $request->name[$key],
                    'price' => $request->price[$key],
                    'desc'  => $request->desc[$key],
                    'qty' => $request->qty[$key]
            ];
        }


        $product['invoice_id'] = $invoice_id;
        $product['invoice_description'] = "Order #{$invoice_id} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = $totalAmt;

        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);

        return redirect($res['paypal_link']);
    }

    public function paymentCancel(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $transError = $paypalModule->getTransactionDetails($request->token);
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        $invoice_no = $response["INVNUM"];
        $order = Order::where('invoice_no', $invoice_no)->first();
        $items = OrderItem::where('order_id', $order->id)->first();
        return redirect()->route('ui.checkout.nft', $items->item_id)->with(['transError'=>$transError]);
    }

    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        $transPayPal = $paypalModule->getTransactionDetails($request->token);

        $transaction = new Transaction;
        $transaction->user_id = auth()->user()->id;
        $transaction->transaction_id = $request->token;
        $transaction->invoice_no = $response['INVNUM'];
        $transaction->ack = $response['ACK'];
        $transaction->amt = $response['AMT'];
        $transaction->payer_id = $response['PAYERID'];
        $transaction->payer_firtsname =  $response['FIRSTNAME'];
        $transaction->payer_lastname =  $response['LASTNAME'];
        $transaction->payer_email =  $response['EMAIL'];
        $transaction->payer_status =  $response['PAYERSTATUS'];
        $transaction->country_code =  $response['CURRENCYCODE'];
        $transaction->short_msg =  $transPayPal['L_SHORTMESSAGE0'];
        $transaction->long_msg =  $transPayPal['L_LONGMESSAGE0'];
        $transaction->save();

        $order = Order::where('invoice_no', $response['INVNUM'])->first();
        $items = OrderItem::where('order_id', $order->id)->first();

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $nft = Nft::find($items->item_id);
            $nft->owner = auth()->user()->id;
            $nft->save();
            return redirect()->route('ui.nft.details', $items->item_id)->with(['paymentStatus'=>true]);
        }
        return redirect()->route('ui.checkout.nft')->with(['error'=>$transPayPal['L_LONGMESSAGE0']]);
        dd('Error occured!');
    }
}
