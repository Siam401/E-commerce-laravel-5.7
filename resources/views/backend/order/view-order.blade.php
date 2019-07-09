@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div>
                <center><h4><strong>View Order</strong></h4></center>
            </div>

        </div>
    </div>
 <div class="container">
    <div class="row col-md-12">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Payment Info For This Order</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Payment Type</th>
                            <td>{{ $payment->payment_type }}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <?php if($payment->status==0){?>
                            <td>pending</td>
                            <?php }else{?>
                            <td>Confirm</td>
                            <?php }?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
         <div class="col-md-6">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="text-center text-info">Customer Info For This Order</h4>
                 </div>
                 <div class="panel-body">
                     <table class="table table-bordered">
                         <tr>
                             <th>Customer Name</th>
                             <td>{{ $customer->user_name }}</td>
                         </tr>
                         <tr>
                             <th>Email Address</th>
                             <td>{{ $customer->email }}</td>
                         </tr>
                         <tr>
                             <th>Phone Number</th>
                             <td>{{ $customer->customer_no }}</td>
                         </tr>
                     </table>
                 </div>
             </div>
         </div>
    </div>
     <div class="row col-md-12">
         <div class="col-md-6">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="text-center text-warning">Shipping Info For This Order</h4>
                 </div>
                 <div class="panel-body">
                     <table class="table table-bordered">
                         <tr>
                             <th>Full Name</th>
                             <td>{{ $shipping->shipping_name }}</td>
                         </tr>
                         <tr>
                             <th>Email Address</th>
                             <td>{{ $shipping->shipping_email }}</td>
                         </tr>
                         <tr>
                             <th>Phone Number</th>
                             <td>{{ $shipping->shipping_customer_no }}</td>
                         </tr>
                         <tr>
                             <th>Address</th>
                             <td>{{ $shipping->shipping_address }}</td>
                         </tr>
                     </table>
                 </div>
             </div>
         </div>

         <div class="col-md-6">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="text-center text-danger">Order Info For This Order</h4>
                 </div>
                 <div class="panel-body">
                     <table class="table table-bordered">
                         <tr>
                             <th>Order Id</th>
                             <td>{{ $order->id }}</td>
                         </tr>
                         <tr>
                             <th>Order Total</th>
                             <td>TK. {{ $order->order_total }}</td>
                         </tr>
                         <tr>
                             <th>Order Status</th>
                             <?php if($order->status==0){?>
                             <td>pending</td>
                             <?php }else{?>
                             <td>Confirm</td>
                             <?php }?>
                         </tr>
                         <tr>
                             <th>Order Date</th>
                             <td>{{ $order->created_at }}</td>
                         </tr>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="text-center text-primary">Product Info For This Order</h4>
                 </div>
                 <div class="panel-body">
                     <table class="table table-bordered">
                         <tr>
                             <th>Product Name</th>
                             <th>Product Price</th>
                             <th>Product Quantity</th>
                             <th>Total Price</th>
                         </tr>
                         @foreach($products as $product)
                             <tr>
                                 <td>{{ $product->title }}</td>
                                 <td>TK. {{ $product->price }}</td>
                                 <td>{{ $product->quantity }}</td>
                                 <td>TK. {{ $product->price*$product->quantity }}</td>
                             </tr>
                         @endforeach
                     </table>
                 </div>
             </div>
         </div>
     </div>
</div>
@endsection
