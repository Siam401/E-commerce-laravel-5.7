@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">

        <div class="float-left">
            Products Details
        </div>

        <div class="float-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">List</a>
        </div>

    </div>
    <div class="card-body">

        <table class="table table-bordered table-striped">

            <tr>
                <td>Title</td>
                <td>{{ $product->title }}</td>
            </tr>

            <tr>
                <td>Brand Name</td>
                <td>{{ $product->brand->title }}</td>
            </tr>

            <tr>
                <td>Image 1</td>
                <td><img src="{{ asset('/uploads/products/'. $product->picture1) }}" alt=""></td>
            </tr>
            <tr>
                <td>Image 2</td>
                <td><img src="{{ asset('/uploads/products/'. $product->picture2) }}" alt=""></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{!! $product->price !!}</td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>{!! $product->quantity !!}</td>
            </tr>
            <tr>
                <td>Suppliers</td>
                <td>
                    @foreach($product->suppliers as $supplier)
                        <a href="#">{{ $supplier->title }}</a> |
                    @endforeach
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection




