<?php

namespace App\Http\Controllers;

use App\Shipping;
use Session;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function store(Request $request){
        $shipping = new Shipping();
        $shipping->shipping_name = $request->shipping_name;
        $shipping->shipping_address = $request->shipping_address;
        $shipping->shipping_email = $request->shipping_email;
        $shipping->shipping_customer_no = $request->shipping_customer_no;
        $shipping->save();

        Session::put('shippingId', $shipping->id);
        return redirect('/resources/payment');
    }
}
