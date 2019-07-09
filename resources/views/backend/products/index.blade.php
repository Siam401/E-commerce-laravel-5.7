@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Products
        </div>
        <div class="float-right">
                <a href="{{ route('products.trash') }}" class="btn btn-primary">Trash</a>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New</a> 
        </div>
    </div>
    <div class="card-body">

        @include('backend.layouts.elements.error')

        <table id="order-listing" class="table">
            <thead>
                <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Brand Name</th>
                <th>Category</th>
                <th>Sub_Category</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Price</th>
                <th>Quanatity</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach($products as $product)
                <tr>
                    <td>{{ ++$serial }}</td>
                    <td>{{ $product->title}}</td>
                    <td>{{ $product->brand->title }}</td>
                    <td>{{ $product->category->title }}</td>
                    <td>{{ $product->sub_category->title }}</td>
                    <td>
                    <img src="{{asset('uploads/products/'.$product->picture1)}}" width='60' alt="" />
                    </td>
                    <td>
                        <img src="{{asset('uploads/products/'.$product->picture2)}}" width='60' alt="" />
                    </td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <a href='{{route("products.show",$product->id)}}' class='btn btn-sm btn-info'>Show</a>
                        <a href='{{route("products.edit",$product->id)}}' class='btn btn-sm btn-warning'>Edit</a>
                        {!! Form::open([
                        'route'=>['products.destroy',$product->id],
                        'files'=>true,'method'=>'delete',
                        'style'=>'display:inline',
                        ])!!}
                            {{ Form::button('Delete',[
                            'class'=>'btn btn-sm btn-danger','type'=>'submit',
                            ]) }}
                        {!! Form::close() !!}
                        <?php if($product->status==0){?>

                        <a href='{{route("products.status",$product->id)}}' class='btn btn-sm btn-warning'>Deactive</a>
                        <?php }else{?>
                        <a href='{{route("products.status",$product->id)}}' class='btn btn-sm btn-warning'>Active </a>
                    <?php }?>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="float-right">

        </div>
    </div>
</div>
@endsection
