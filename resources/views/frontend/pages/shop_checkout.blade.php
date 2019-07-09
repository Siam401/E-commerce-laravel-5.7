@extends('master')
@section('nothing')
    @php
        $customer_id=session('customer_id')
    @endphp
    <?php if($customer_id != NULL){ ?>

    <a type="button"  class="btn btn-small" href="{{ route('resources.shop_billing') }}">Checkout</a>
    <?php }else{ ?>
    <a type="button"  class="btn btn-small" href="{{ route('resources.login') }}">Login</a>
    <?php }?>

@endsection
@section('content')
<!-- START - Inner Head -->
@include('frontend.layouts.partials.slide')
<!-- END - Inner Head -->

<!-- START - Contain Wrapp -->
<div class="contain-wrapp padding-bottom-40">
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
                            <td>{{ $a++ }}</td>
                            <td>
                                <a href="#" class="alignleft"><img style="height: 50px;width: 50px" src="{{asset('uploads/products/'.$cartitem->attributes->image)}}" alt="" /></a>
                                <h6 class="item-title"><a href="#">{{ $cartitem->name }}</a><br /></h6>
                            </td>
                            <td >{{ $cartitem->price }}</td>
                            <td >{{ $cartitem->quantity }}</td>
                            <td >{{ $cartitem->quantity*$cartitem->price }}</td>
                            <td ><a href="{{ route('resources.cart_remove',$cartitem->id) }}" class="remove"><i class="fa fa-remove"></i></a></td>
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
                    @php
                        $customer_id=session('customer_id')
                    @endphp
                    <?php if($customer_id != NULL){ ?>
                    <a class="btn-e btn-e-success btn-block" href="{{ route('resources.shop_billing') }}">Proceed to checkout</a>
                    <?php }else{ ?>
                    <a class="btn-e btn-e-success btn-block" href="{{route('resources.login')}}">Proceed to checkout</a>
                    <?php }?>
                </div>
            </div>
            <!-- End total cart -->
        </div>
    </div>
</div>
    @endsection