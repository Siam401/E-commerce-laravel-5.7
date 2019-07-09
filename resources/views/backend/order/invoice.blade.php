@extends('backend.layouts.master')

@section('content')

    <div class="card px-2">
        <div class="card-body">
            <div class="container-fluid">
                <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#INV-{{ $order->id }}</h3>
                <hr>
            </div>
            <div class="container-fluid d-flex justify-content-between">
                <div class="col-lg-3 pl-0">
                    <p class="mt-5 mb-2"><b>Ecada</b></p>
                    <p>{{ Auth::user()->profile->Address }}</p>
                </div>
                <div class="col-lg-3 pr-0">
                    <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                    <p class="text-right">{{ $shipping->shipping_name }},<br> {{ $shipping->shipping_customer_no }},<br> {{ $shipping->shipping_email }},<br> {{ $shipping->shipping_address }}.</p>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-between">
                <div class="col-lg-3 pl-0">
                    <p class="mb-0 mt-5">Invoice Date : {{  strftime("%d %b %Y",strtotime($order->created_at)) }}</p>
                    {{--<p>Due Date : 25th Jan 2017</p>--}}
                </div>
            </div>
            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                <div class="table-responsive w-100">
                    <table class="table">
                        <thead>
                        <tr class="bg-dark text-white">
                            <th>#</th>
                            <th>Description</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Unit cost</th>
                            <th class="text-right">Total</th>
                        </tr>
                        </thead>
                        <tbody>
        <?php
        $a=1;
        ?>
                        @foreach($products as $product)
                            <tr class="text-right">
                                <td class="text-left">{{ $a++ }}</td>
                                <td class="text-left">{{ $product->title }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>TK. {{ $product->price }}</td>
                                <td>TK. {{ $product->price*$product->quantity }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container-fluid mt-5 w-100">
                {{--<p class="text-right mb-2">Sub - Total amount: TK. {{ $order->order_total }}</p>--}}
                {{--<p class="text-right">vat (10%) : $138</p>--}}
                <h4 class="text-right mb-5">Total : TK. {{ $order->order_total }}</h4>
                <hr>
            </div>
            <div class="container-fluid w-100">
                <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Print</a>
                <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Invoice</a>
            </div>
        </div>
    </div>

@endsection