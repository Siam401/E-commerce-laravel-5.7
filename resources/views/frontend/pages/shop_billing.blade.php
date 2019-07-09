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
                <!-- Start shopping cart -->
                <div class="col-md-12">
                    <div class="tab-icons">
                        <!-- Tab panes -->
                        <table class="styled-table mobile-responsive margin-bottom-20">
                            <thead>
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">Product</th>
                                <th class="text-left">Price</th>
                                <th class="text-left">Qty</th>
                                <th class="text-left">Toatl Price</th>
                                <th class="text-left">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $a=1;
                            ?>
                            @foreach($cartitems as $cartitem)
                                <tr>
                                    <td >{{ $a++ }}</td>
                                    <td >
                                        <a href="#" class="alignleft"><img style="height: 50px;width: 50px" src="{{asset('uploads/products/'.$cartitem->attributes->image)}}" alt="" /></a>
                                        <h6 class="item-title"><a href="#">{{ $cartitem->name }}</a><br /></h6>
                                    </td>
                                    <td >{{ $cartitem->price }}</td>
                                    <td >{{ $cartitem->quantity }}</td>
                                    <td >{{ $cartitem->quantity*$cartitem->price }}</td>
                                    <td style="width: 10%;"><a href="{{ route('resources.cart_remove',$cartitem->id) }}" class="remove"><i class="fa fa-remove"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End shopping cart -->
            </div>
            <div class="row">
                <!-- Start total cart -->
                <div class="col-md-12">
                    <div class="cart-total pull-right">
                        <p class="grand-total">
                            <label>Grand total :</label> <span class="primary">{{ Cart::getTotal() }}</span></p>
                    </div>
                </div>
                <!-- End total cart -->
            </div>


            <div class="row">

                <center><h4>Shipping Information</h4></center>
                <hr>
                <!-- Start billing information -->
                <div class="col>
                    <h5 class="head-title"></h5>
          {!! Form::open(['route' => 'shipping.store',
                'id'=>'billing',
                'class'=>'form-horizontal',
          ]) !!}
                        <div class="form-group">
                            <label for="input1" class="col-sm-3">Name <span class="no-empty">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="shipping_name" class="form-control" id="input1" value="{{ $customer->user_name }}" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input2" class="col-sm-3">Address <span class="no-empty">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="shipping_address" class="form-control" id="input2" placeholder="Enter your Address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input3" class="col-sm-3">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="shipping_email" class="form-control" value="{{ $customer->email }}"  id="input3" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input4" class="col-sm-3">Mobile Number <span class="no-empty">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control margin-bottom-20" name="shipping_customer_no" id="input4" value="{{ $customer->customer_no }}"  placeholder="Enter mobile number">
                            </div>
                        </div>
                        <center><button type="submit" class="btn-e btn-e-primary btn-lg">Place order</button></center>


                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>


@endsection