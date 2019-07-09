
@extends('master')
@section('title','Shop Product')
@section('nothing','Shop Product')
@section('content')
    <!-- START - Inner Head -->
    @include('frontend.layouts.partials.slide')
    <!-- END - Inner Head -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp">
        <div class="container">
            <div class="row">
                <!-- Start product detail -->
                <div class="col-md-4 col-sm-3">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{asset('uploads/products/'.$product->picture1)}}">
                                <img src="{{asset('uploads/products/'.$product->picture1)}}" class="img-responsive" alt="" />
                            </li>
                            <li data-thumb="{{asset('uploads/products/'.$product->picture2)}}">
                                <img src="{{asset('uploads/products/'.$product->picture2)}}" class="img-responsive" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End product detail -->

                <!-- Start product description -->
                <div class="col-sm-5">
                    <!-- Start title -->
                    <div class="shop-title">

                        <h4>{{ $product->title }}</h4>
                        <div class="price"><span>Tk. {{ $product->price }}</span></div>

                        <span class="product-label">Sale</span>
                    </div>
                    <!-- End title -->

                    <!-- Start tabber -->
                    <div class="tab-default">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            {{--<li role="presentation" class="active"><a href="#desc" role="tab" data-toggle="tab"><i class="fa fa-file-text"></i> Description</a></li>--}}
                            <li role="presentation" class="active"><a href="#detail" role="tab" data-toggle="tab"><i class="fa fa-briefcase"></i> Detail</a></li>
                            <li role="presentation"><a href="#review" role="tab" data-toggle="tab"><i class="fa fa-comments"></i> Reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            {{--<div role="tabpanel" class="tab-pane active" id="desc">--}}
                                {{--<h6>Description</h6>--}}
                                {{--<p>--}}
                                    {{--Vivamus erat eros, auctor at dolor vel, tempor tincidunt risus. Fusce viverra blandit egestas. Aliquam blandit, dui quis vulputate dictum, libero libero tristique magna, sed auctor lectus risus eu ipsum. Aliquam gravida, odio ut pretium volutpat, eros massa sollicitudin sapien, et pretium elit metus at magna.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <h6>Item detail</h6>
                                <table class="parameter-product">
                                    <tr class="active">
                                        <td><strong>Brand</strong></td>
                                        <td>{{ $product->brand->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Supplier</strong></td>
                                        <td>
                                            @foreach($product->suppliers as $supplier)
                                                <a href="{{ route('supplier.products',$supplier->id) }}">{{ $supplier->title }}</a> |
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td><strong>Item Left</strong></td>
                                        <td>{{ $product->quantity }} </td>
                                    </tr>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="review">
                                <!-- START - Leave Comments -->
                                <h5>Leave comments</h5>
                                <form class="row">
                                    <div class="col-md-6 margin-bottom-30">
                                        <input class="form-control" type="text" name="name" placeholder="Enter your full name" />
                                    </div>
                                    <div class="col-md-6 margin-bottom-30">
                                        <input class="form-control" type="text" name="email" placeholder="Enter your e-mail" />
                                    </div>
                                    <div class="col-md-12 margin-bottom-30">
                                        <textarea class="form-control" rows="9" name="message" placeholder="Your comment here"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Your Rating :</label>
                                        <div id="start" class="rate" data-rating="1"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Leave comment" class="btn-e btn-rounded btn-e-primary" name="Submit" />
                                    </div>
                                </form>
                                `
                                <!-- END - Leave Comments -->

                                <!-- START - Comments -->
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('ui/frontend/img/testimonials/img01.jpg')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">John Doe</a></h6>
                                        <p>
                                            Sensibus salutandi qualisque vix cu, eu per saperet fastidii. Unum postea alienum vis ei ea vim paulo.
                                        </p>
                                        <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('ui/frontend/img/testimonials/img04.jpg')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">Jane Roe</a></h6>
                                        <p>
                                            Ea meis menandri mei, ex nec malis legendos, quot inani ancillae cu sed. Suas scaevola ius ex aeque.
                                        </p>
                                        <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                                    </div>
                                </div>
                                <!-- END - Comments -->
                            </div>
                        </div>
                    </div>
                    <!-- End tabber -->

                    <!-- Start buy action -->
                    <div class="row margin-top-30">

                        <?php if($product->quantity > 0){?>
                        {!! Form::open(['route' => 'resources.addcart']) !!}
                        {{--<div class="form-group col-sm-6">--}}
                            {{--<select class="form-control">--}}
                                {{--<option>Select color</option>--}}
                                {{--<option>Red</option>--}}
                                {{--<option>Blue</option>--}}
                                {{--<option>Green</option>--}}
                                {{--<option>Yellow</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-sm-6">--}}
                            {{--<select class="form-control">--}}
                                {{--<option>Select size</option>--}}
                                {{--<option>Small</option>--}}
                                {{--<option>Medium</option>--}}
                                {{--<option>Large</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        <div class="form-group col-sm-12">
                            <h6>Quantity :</h6>
                            <!-- Input Order -->
                            <div class="input-group input-group-lg">
                                <input type="number" name="quant" min="1" max="{{ $product->quantity }}" class="form-control input-number" value="1">
                            </div>
                            <!-- End Input Order -->
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group col-sm-6">
                            <button type="submit" class="btn btn-e-primary btn-block"><i class="icon-cart"></i>Add to cart</button>
                        </div>
                        {!! Form::close() !!}
                        <?php }else{?>
                            <p><strong>Out of stock</strong></p>
                        <?php }?>



                    </div>
                    <!-- End buy action -->
                </div>
                <!-- End product description -->

                <!-- Start related product -->
                <div class="col-md-3 col-sm-4">
                    <h5>Related products</h5>
                    <div class="flexslider1">
                        <ul class="slides">
                            @foreach($relateds as $related)
                            <li>
                                <!-- Start product 1 -->
                                <div class="product-wrapper" data-colour='red' data-size='small' data-genre='man'>
                                    <div class="img-wrapper">
                                        <span class="product-label">Sale</span>
                                        <div class="img-caption ecadaZoomIn">
                                            <a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                            <h5><a href="{{ route('resources.shop_product', $related->id) }}">{{ $related->title }}</a></h5>
                                        </div>
                                        <img src="{{asset('uploads/products/'.$related->picture1)}}" class="img-responsive" alt="" />
                                    </div>
                                    <div class="product-title">
                                        <h5><a href="{{ route('resources.shop_product', $related->id) }}">{{ $related->title }}</a></h5>
                                    </div>
                                    <div class="product-footer">
                                        <div class="price"><span>{{ $related->price }}</span></div>
                                        <div class="buy">
                                            <a href="{{ route('resources.shop_product', $product->id) }}"><i class="fa fa-shopping-cart">Buy</i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End product 1 -->
                            </li>
                            @endforeach
                            {{--<li>--}}
                                {{--<!-- Start product 3 -->--}}
                                {{--<div class="product-wrapper" data-colour='blue' data-size='large' data-genre='women'>--}}
                                    {{--<div class="img-wrapper">--}}
                                        {{--<div class="img-caption ecadaZoomIn">--}}
                                            {{--<a href="{{asset('ui/frontend/img/shop/prod03.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                                            {{--<h5><a href="shop_product.html">Product Title</a></h5>--}}
                                            {{--<a href="#" class="img-categorie">Dress</a>--}}
                                        {{--</div>--}}
                                        {{--<img src="{{asset('ui/frontend/img/shop/prod03.jpg')}}" class="img-responsive" alt="" />--}}
                                    {{--</div>--}}
                                    {{--<div class="product-title">--}}
                                        {{--<div class="rating">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                        {{--</div>--}}
                                        {{--<h5><a href="shop_product.html">Product Green</a></h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-footer">--}}
                                        {{--<div class="price"><span>$99</span></div>--}}
                                        {{--<div class="buy">--}}
                                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End product 3 -->--}}
                            {{--</li>--}}

                        </ul>
                    </div>
                </div>
                <!-- End related product -->
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- Start gray Contain Wrapp -->

    {{--@include('frontend.layouts.partials.extracontent')--}}

    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- END - Back To Top -->

    <!-- jQuery -->
    <script src="{{asset('ui/frontend/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP -->
    <script src="{{asset('ui/frontend/js/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script src="{{asset('ui/frontend/js/jquery.easing-1.3.min.js')}}"></script>

    <!-- Parallax -->
    <script src="{{asset('ui/frontend/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('ui/frontend/js/parallax/setting.js')}}"></script>

    <!-- Flexslider -->
    <script src="{{asset('ui/frontend/js/flexslider/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('ui/frontend/js/flexslider/js/setting.js')}}"></script>


@endsection