@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Sub-sub_categories
        </div>
        <div class="float-right">
                <a href="{{ route('sub_categories.trash') }}" class="btn btn-primary">Trash</a>
                <a href="{{ route('sub_categories.create') }}" class="btn btn-primary">Add New</a> 
        </div>
    </div>
    <div class="card-body">

        @include('backend.layouts.elements.error')

        <table id="order-listing" class="table">
            <thead >
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
               @foreach($sub_categories as $sub_category)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$sub_category->title}}</td>                
                    
                    
                    <td>
                        <a href='{{route("sub_categories.show",$sub_category->id)}}' class='btn btn-sm btn-info'>Show</a>
                        <a href='{{route("sub_categories.edit",$sub_category->id)}}' class='btn btn-sm btn-warning'>Edit</a>
                        {!! Form::open([
                        'route'=>['sub_categories.destroy',$sub_category->id],
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
