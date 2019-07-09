<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function manageOrder() {
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.user_name', 'payments.payment_type', 'payments.status')
            ->get();
        return view('backend.order.manage_order', ['orders'=>$orders]);
    }
    public function viewOrderDetail($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();
        $products = OrderDetail::where('order_id', $order->id)->get();

        return view('backend.order.view-order', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'products' => $products
        ]);
    }

    public function OrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();
        $products = OrderDetail::where('order_id', $order->id)->get();

        return view('backend.order.invoice', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'products' => $products
        ]);
    }

    public function changeOrderStatus($id) {

            DB::table('orders')->where('id',$id)->update(['status' => 1]);
            return redirect()->back();

    }

    public function deleteOrder($id) {
        $order = Order::findOrFail($id);
        $shipping = Shipping::findOrFail($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();


        DB::table('order_details')->where('order_id', $order->id)->delete();
        $payment->delete();
        $order->delete();
        $shipping->delete();




        return redirect()->back();
    }
}
