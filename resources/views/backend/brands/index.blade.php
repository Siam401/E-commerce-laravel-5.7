@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Brands
        </div>
        <div class="float-right">
{{--            <a href="{{ route('brands.trash') }}" class="btn btn-primary">Trash</a>--}}
                 <a href="{{ route('brands.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="card-body">

        @include('backend.layouts.elements.error')

        <table id="order-listing" class="table">
            <thead>
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody >
            @foreach($brands as $brand)
                <tr>
                    <td>{{ ++$serial }}</td>
                    <td>{{ $brand->title }}</td>
                    <td><img style="height: 50px;width: 50px" src="{{ asset('/uploads/brands/'. $brand->image) }}" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('brands.show',$brand->id) }}">show</a>
                        <a class="btn btn-warning" href="{{ route('brands.edit',$brand->id) }}">edit</a>
                        {!! Form::open([
                          'route'=>['brands.destroy',$brand->id],
                          'method'=>'delete',
                          'style'=>'display:inline'
                        ]) !!}
                        {!! Form::button('delete',[
                          'type'=>'submit',
                          'class'=>'btn btn-danger',
                          'onclick'=>'return confirm("Are you sure to delete?")'
                        ]) !!}
                        {!! Form::close() !!}
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
