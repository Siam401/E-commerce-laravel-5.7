@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Suppliers
        </div>
        <div class="float-right">
{{--            <a href="{{ route('suppliers.trash') }}" class="btn btn-primary">Trash</a>--}}
                 <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="card-body">

        @include('backend.layouts.elements.error')

        <table id="order-listing" class="table">
            <thead>
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody >
            @foreach($suppliers as $supplier)
                <tr data-expanded="true">
                    <td>{{ ++$serial }}</td>
                    <td>{{ $supplier->title }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('suppliers.show',$supplier->id) }}">show</a>
                        <a class="btn btn-warning" href="{{ route('suppliers.edit',$supplier->id) }}">edit</a>
                        {!! Form::open([
                          'route'=>['suppliers.destroy',$supplier->id],
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
