@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Categories
        </div>
        <div class="float-right">
                <a href="{{ route('categories.trash') }}" class="btn btn-primary">Trash</a>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a> 
        </div>
    </div>
    <div class="card-body">

        @include('backend.layouts.elements.error')

        <table id="order-listing" class="table">
            <thead>
                <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @php
               $i=0;
               @endphp
               @foreach($categories as $category)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$category->title}}</td>                
                    
                    
                    <td>
                        <a href='{{route("categories.show",$category->id)}}' class='btn btn-sm btn-info'>Show</a>
                        <a href='{{route("categories.edit",$category->id)}}' class='btn btn-sm btn-warning'>Edit</a>
                        {!! Form::open([
                        'route'=>['categories.destroy',$category->id],
                        'files'=>true,'method'=>'delete',
                        'style'=>'display:inline',
                        ])!!}
                            {{ Form::button('Delete',[
                            'class'=>'btn btn-sm btn-danger','type'=>'submit',
                            ]) }}
                        {!! Form::close()!!}
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
