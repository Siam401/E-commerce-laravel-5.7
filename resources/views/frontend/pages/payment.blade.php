@extends('master')
@section('nothing','Check Out')
@section('nothing','Check Out')
@section('content')
    <!-- START - Inner Head -->
    @include('frontend.layouts.partials.slide')
    <!-- END - Inner Head -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp">
        <div class="container">
            <div class="row">

                <center><h4>Payment</h4></center>
                <hr>
                <!-- Start billing information -->
                <div class="col>
                    <h5 class="head-title"></h5>
                {!! Form::open(['route' => 'payment.store',
                      'id'=>'billing',
                      'class'=>'form-horizontal',
                ]) !!}
                <table class="table table-bordered">
                    <tr>
                        <th>Cash On Delivery</th>
                        <td><input type="radio" name="payment_type" value="Cash"></td>
                    </tr>
                    <tr>
                        <th>Paypal</th>
                        <td><input type="radio" name="payment_type" value="Paypal"></td>
                    </tr>
                    <tr>
                        <th>Bkash</th>
                        <td><input type="radio" name="payment_type" value="Bkash"></td>
                    </tr>
                </table>
                <center><button type="submit" class="btn-e btn-e-primary btn-lg">Confirm</button></center>


                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>


@endsection