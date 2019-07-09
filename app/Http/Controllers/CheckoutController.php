<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Payment;
use Cart;
use App\OrderDetail;
use Illuminate\Support\Facades\DB;
use Shipping;
use Session;

class CheckoutController extends Controller
{
    public function payment_info() {
        return view('frontend.pages.payment');
    }

    public function saveOrderInfo(Request $request) {
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash') {
            $order = new Order();
            $order->customer_id = Session::get('customer_id');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Cart::getTotal();

            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::getContent();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->title = $cartProduct->name;
                $orderDetail->price = $cartProduct->price;
                $orderDetail->quantity	= $cartProduct->quantity;
                $orderDetail->save();
                $product=Product::findOrFail($cartProduct->id);
                $product->quantity=$product->quantity-$cartProduct->quantity;
                DB::table('products')
                    ->where('id', $cartProduct->id)
                    ->update(['quantity' => $product->quantity]);;

            }
            Cart::clear();

            return redirect('/checkout/complete-order');

        } else if ($paymentType == 'Paypal') {
            return 'In Paypal Method';
        } else if ($paymentType == 'Bkash') {
            return 'In Bkash Method';
        }

    }

    public function complete(){
        return view('frontend.pages.complete');
    }
}
