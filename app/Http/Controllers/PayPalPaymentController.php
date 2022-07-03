<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
class PayPalPaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        $product = [];
        $totalAmt = 0;
        $invoice_id  = hash('sha256', microtime() );
        $orderItems = array();
        $order = new Order;
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

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Payment was successfull. The payment success page goes here!');
        }

        dd('Error occured!');
    }
}
