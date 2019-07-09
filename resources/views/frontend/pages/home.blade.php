@extends('master')


@section('title','home')
@section('content')

    <!-- START REVOLUTION SLIDER 5.0 -->
    <div id="slider_container" class="rev_slider_wrapper">
        <div id="rev-slider" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="boxslide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ui/frontend/img/slider/revolution/011.jpg')}}" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline3 text-right" id="slide-51-layer-1" data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="1200" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Get discount
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption captionText1" id="slide-51-layer-2" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink" id="slide-400-layer-3" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                        <a href="{{ route('resources.sidebar2') }}" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </li>
                <li data-transition="boxslide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ui/frontend/img/slider/revolution/012.jpg')}}" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline3 text-right" id="slide-51-layer-4" data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="1200" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Quick & safe
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption captionText1" id="slide-51-layer-5" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink" id="slide-400-layer-6" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                        <a href="#" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </li>
                <li data-transition="boxslide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ui/frontend/img/slider/revolution/013.jpg')}}" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline3" id="slide-51-layer-7" data-x="['left','left','left','left']" data-hoffset="['80','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="544" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Get more gifts
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption captionText1" id="slide-51-layer-8" data-x="['left','left','left','left']" data-hoffset="['80','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink" id="slide-400-layer-9" data-x="['left','left','left','left']" data-hoffset="['80','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                        <a href="#" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- END OF SLIDER WRAPPER -->



    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp gray-container padding-bottom-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Recent Products</h3>

                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <!-- Start Recent Product -->
            <div id="recent-products" class="owl-carousel leftControls-right">
                <!-- Start product 1 -->
                @foreach($products as $product)
                <div class="item product-wrapper">
                    <div class="img-wrapper">
                        <span class="product-label">Sale</span>
                        <div class="img-caption ecadaZoomIn">
                            <a href="{{asset('uploads/products/'.$product->picture1)}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                            <h5><a href="{{route('resources.shop_product', $product->id)}}">{{ $product->title }}</a></h5>
                            <a href="#" class="img-categorie">Jacket</a>
                        </div>
                        <img src="{{ asset('uploads/products/'.$product->picture1) }}" class="img-responsive" alt="" />
                    </div>
                    <div class="product-title">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5><a href="{{route('resources.shop_product', $product->id)}}">{{ $product->title }}</a></h5>
                    </div>
                    <div class="product-footer">
                        <div class="price"><span>{{ $product->price }}</span></div>
                        <div class="buy">
                            <button type="submit"><i class="fa fa-shopping-cart"></i> <a href="{{route('resources.shop_product', $product->id)}}">Buy</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End product 1 -->

                <!-- Start product 2 -->
                {{--<div class="item product-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<span class="product-label">Sale</span>--}}
                        {{--<div class="img-caption ecadaZoomIn">--}}
                            {{--<a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                            {{--<h5><a href="{{url('/resources/shop_product')}}">Product Title</a></h5>--}}
                            {{--<a href="#" class="img-categorie">Jacket</a>--}}
                        {{--</div>--}}
                        {{--<img src="{{asset('ui/frontend/img/shop/prod02.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                    {{--<div class="product-title">--}}
                        {{--<div class="rating">--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star-half-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</div>--}}
                        {{--<h5><a href="{{url('/resources/shop_product')}}">Product Black</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="product-footer">--}}
                        {{--<div class="price"><del>$100</del> <span>$60</span></div>--}}
                        {{--<div class="buy">--}}
                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i> <a href="{{url('/resources/shop_checkout')}}">Buy</a></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End product 2 -->--}}

                {{--<!-- Start product 3 -->--}}
                {{--<div class="item product-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<span class="product-label">Sale</span>--}}
                        {{--<div class="img-caption ecadaZoomIn">--}}
                            {{--<a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                            {{--<h5><a href="{{url('/resources/shop_product')}}">Product Title</a></h5>--}}
                            {{--<a href="#" class="img-categorie">Jacket</a>--}}
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
                        {{--<h5><a href="{{url('/resources/shop_product')}}">Product Green</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="product-footer">--}}
                        {{--<div class="price"><del>$100</del> <span>$60</span></div>--}}
                        {{--<div class="buy">--}}
                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i><a href="{{url('/resources/shop_checkout')}}">Buy</a></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End product 3 -->--}}

                {{--<!-- Start product 4 -->--}}
                {{--<div class="item product-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<span class="product-label">Sale</span>--}}
                        {{--<div class="img-caption ecadaZoomIn">--}}
                            {{--<a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                            {{--<h5><a href="{{url('/resources/shop_product')}}">Product Title</a></h5>--}}
                            {{--<a href="#" class="img-categorie">Jacket</a>--}}
                        {{--</div>--}}
                        {{--<img src="{{asset('ui/frontend/img/shop/prod04.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                    {{--<div class="product-title">--}}
                        {{--<div class="rating">--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star-half-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</div>--}}
                        {{--<h5><a href="{{url('/resources/shop_product')}}">Product Black</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="product-footer">--}}
                        {{--<div class="price"><del>$100</del> <span>$60</span></div>--}}
                        {{--<div class="buy">--}}
                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i> <a href="{{url('/resources/shop_checkout')}}">Buy</a></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End product 4 -->--}}

                {{--<!-- Start product 5 -->--}}
                {{--<div class="item product-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<span class="product-label">Sale</span>--}}
                        {{--<div class="img-caption ecadaZoomIn">--}}
                            {{--<a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                            {{--<h5><a href="{{url('/resources/shop_product')}}">Product Title</a></h5>--}}
                            {{--<a href="#" class="img-categorie">Jacket</a>--}}
                        {{--</div>--}}
                        {{--<img src="{{asset('ui/frontend/img/shop/prod05.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                    {{--<div class="product-title">--}}
                        {{--<div class="rating">--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star-half-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</div>--}}
                        {{--<h5><a href="{{url('/resources/shop_product')}}">Product Red</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="product-footer">--}}
                        {{--<div class="price"><del>$100</del> <span>$60</span></div>--}}
                        {{--<div class="buy">--}}
                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i> <a href="{{url('/resources/shop_checkout')}}">Buy</a></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End product 5 -->--}}

                {{--<!-- Start product 6 -->--}}
                {{--<div class="item product-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<span class="product-label">Sale</span>--}}
                        {{--<div class="img-caption ecadaZoomIn">--}}
                            {{--<a href="{{asset('ui/frontend/img/shop/prod01.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>--}}
                            {{--<h5><a href="{{url('/resources/shop_product')}}">Product Title</a></h5>--}}
                            {{--<a href="#" class="img-categorie">Jacket</a>--}}
                        {{--</div>--}}
                        {{--<img src="{{asset('ui/frontend/img/shop/prod06.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                    {{--<div class="product-title">--}}
                        {{--<div class="rating">--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star-half-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</div>--}}
                        {{--<h5><a href="{{url('/resources/shop_product')}}">Product Orange</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="product-footer">--}}
                        {{--<div class="price"><del>$10000</del> <span>$60000</span></div>--}}
                        {{--<div class="buy">--}}
                            {{--<button type="submit"><i class="fa fa-shopping-cart"></i> <a href="{{url('/resources/shop_checkout')}}">Buy</a></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- End product 6 -->
            </div>
            <!-- End Recent Product -->
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- START - Parallax -->
    {{--<div class="parallax bg5">--}}
        {{--<div class="parallax-container">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-8 col-md-offset-2 owl-column-wrapp">--}}
                        {{--<div id="testimonials" class="owl-carousel">--}}
                            {{--<div class="item">--}}
                                {{--<div class="testimonials-single">--}}
                                    {{--<blockquote class="centered">--}}
                                        {{--Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.--}}
                                    {{--</blockquote>--}}
                                    {{--<span class="block"><a href="#">Evan Bohringer</a> - Google Manager</span>--}}
                                    {{--<img src="{{asset('ui/frontend/img/testimonials/img01.jpg')}}" class="img-circle testimonials-avatar" alt="" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="testimonials-single">--}}
                                    {{--<blockquote class="centered">--}}
                                        {{--Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.--}}
                                    {{--</blockquote>--}}
                                    {{--<span class="block"><a href="#">Alice Williams</a> - Wrapbootstrap</span>--}}
                                    {{--<img src="{{asset('ui/frontend/img/testimonials/img02.jpg')}}" class="img-circle testimonials-avatar" alt="" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="testimonials-single">--}}
                                    {{--<blockquote class="centered">--}}
                                        {{--Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.--}}
                                    {{--</blockquote>--}}
                                    {{--<span class="block"><a href="#">John Doe</a> - Facebook</span>--}}
                                    {{--<img src="{{asset('ui/frontend/img/testimonials/img03.jpg')}}" class="img-circle testimonials-avatar" alt="" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="testimonials-single">--}}
                                    {{--<blockquote class="centered">--}}
                                        {{--Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.--}}
                                    {{--</blockquote>--}}
                                    {{--<span class="block"><a href="#">Katrina Mc`coy</a> - Web Designer</span>--}}
                                    {{--<img src="{{asset('ui/frontend/img/testimonials/img04.jpg')}}" class="img-circle testimonials-avatar" alt="" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- END - Parallax -->

    <div class="clearfix"></div>

    <!-- Start gray Contain Wrapp -->
    {{--@include('frontend.layouts.partials.extracontent')--}}
    <!-- End gray Contain Wrapp -->

    <div class="clearfix"></div>

    <!-- START - Parallax -->
    <div class="parallax parallax-two bg-clients">
        <div class="parallax-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 owl-column-wrapp text-center">
                        <div id="clients" class="owl-carousel leftControls-right">
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo01.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo02.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo03.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo04.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo05.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo06.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo07.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="{{asset('ui/frontend/img/clients/logo08.png')}}" class="img-reponsive" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Parallax -->

    <div class="clearfix"></div>
    @endsection