@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Deleted Products
            </div>
            <div class="float-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">List</a>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="100">SL#</th>
                    <th>Title</th>
                    <th>Brand Name</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Price</th>
                    <th>Quanatity</th>
                    <th width="220" class="text-right">Action</th>
                </tr>
                @php $serial = 0; @endphp
                @foreach($products as $product)
                    <tr>
                        <td>{{ ++$serial }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{$product->brand_id}}</td>
                        <td>
                            <img src="{{asset('uploads/products/'.$product->picture1)}}" width='60' alt="" />
                        </td>
                        <td>
                            <img src="{{asset('uploads/products/'.$product->picture2)}}" width='60' alt="" />
                        </td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td class="text-right">
                            <a href='{{route("products.show",$product->id)}}' class='btn btn-sm btn-info'>Show</a>
                            <a href="{{ route('products.restore', $product->id) }}" class="btn btn-sm btn-warning">Restore</a>
                            {!! Form::open([
                                            'route' => ['products.delete', $product->id],
                                            'method' => 'delete',
                                            'files' =>true,
                                            'style' => 'display:inline',
                                        ]) !!}
                            {!! Form::button('Delete',[
                                    'type' => 'submit',
                                    'class' => "btn btn-sm btn-danger",
                                    'onclick' => 'return confirm("Are You Sure Want To Delete Permanently ?")',

                            ]) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection