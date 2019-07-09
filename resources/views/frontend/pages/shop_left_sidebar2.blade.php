@extends('master')
@section('title','left Sidebar')
@section('nothing')
    <a type="button"  class="btn btn-small" href="{{ route('resources.cart') }}">Cart({{$cartitems->count()}})</a>
@endsection
@section('content')
    @include('frontend.layouts.partials.slide')
    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-40">
        <div class="container">
            <div class="row">
                <!-- START - Aside -->
                <div class="col-sm-3 col-xs-12">
                    <aside>
                        <!-- Start accordion -->
                        <div class="panel-group" id="accordion1" role="tablist">
                            <!-- Accordion 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                            Categories
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="cat fullwidth">
                                            @foreach($categories as $category)
                                            <li><a href="{{ route('category.products',$category->id) }}"><i class="fa fa-edit"></i> {{ $category->title }}</a></li>
                                                @endforeach
                                                @foreach($sub_categories as $sub_category)
                                                    <li><a href="{{ route('sub_category.products',$sub_category->id) }}"><i class="fa fa-edit"></i> {{ $sub_category->title }}</a></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                            Brands
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="cat fullwidth">
                                            @foreach($brands as $brand)
                                                <li><a href="{{ route('brand.products',$brand->id) }}"><i class="fa fa-edit"></i> {{ $brand->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion 4 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse4">
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                            Suppliers
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        @foreach($suppliers as $supplier)
                                            <a href="{{ route('supplier.products',$supplier->id) }}" class="tag">{{ $supplier->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion 4 -->
                        </div>
                        <!-- End accordion -->
                    </aside>
                </div>
                <!-- END - Aside -->

                <!-- Start products -->
                <div class="col-xs-12 col-sm-9">
                    <div class="filter-block margin-bottom-20">
                        <div class="row">
                            {!! Form::open(['route' => 'resources.sorting']) !!}
                            <div class="margin-bottom-15 col-sm-4">
                                <label>Sort by :</label>
                                <select class="form-control" name="sorting">
                                    <option></option>
                                    <option value="popular">Sort by popular item</option>
                                    <option value="low_price">Sort by low-height price</option>
                                    <option value="high_price">Sort by height-low price</option>
                                </select>
                            </div>
                            <div class="margin-upside-15 col-sm-2">
                                <label></label>
                                <button type="submit" class="btn btn-e-primary btn-block"><i class="icon-cart"></i>Sort</button>
                            </div>
                            {!! Form::close() !!}
                            {{--<div class="col-sm-2">--}}
                                {{--<label>Show :</label>--}}
                                {{--<select class="form-control">--}}
                                    {{--<option>All</option>--}}
                                    {{--<option>5</option>--}}
                                    {{--<option>10</option>--}}
                                    {{--<option>20</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            <div class="col-sm-6">
                                <div class="result">
                                    <span class="highlight primary">{{ count($products) }} Result</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="product-block margin-bottom-20">
                        <div class="row">
                            <!-- Start product 1 -->
                        @foreach($products as $product)
                            <div class="col-md-4 col-xs-6 product-wrapper" data-color="purple" data-size="small" data-genre="man">
                                <div class="img-wrapper">
                                    <span class="product-label">Sale</span>
                                    <div class="img-caption ecadaZoomIn">
                                        <a href="{{asset('uploads/products/'.$product->picture1)}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                        <h5><a href="{{route('resources.shop_product', $product->id)}}">{{ $product->title }}</a></h5>
                                        <a href="#" class="img-categorie">Shirt</a>
                                    </div>
                                    <img src="{{asset('uploads/products/'.$product->picture1)}}" class="img-responsive" alt="" />
                                </div>
                                <div class="product-title">

                                    <h5><a href="{{ route('resources.shop_product', $product->id) }}">{{ $product->title }}</a></h5>
                                </div>
                                <div class="product-footer">
                                    <div class="price"><span>Tk. {{ $product->price }}</span></div>
                                    <div class="buy">
                                        <a href="{{ route('resources.shop_product', $product->id) }}"><i class="fa fa-shopping-cart">Buy</i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End product 1 -->
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <?php
                if($products->count()<9){

                }else{
                    echo $products->links() ;
                }
            ?>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <div class="clearfix"></div>
    @endsection