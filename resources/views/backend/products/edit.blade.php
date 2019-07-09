@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Edit Product
            </div>
            <div class="float-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">List</a>
            </div>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
              {!! Form::model($product,[
                        'route' => ['products.update',$product->id],
                        'method' => 'put',
                        'files' => true,
                        ])!!}
            <fieldset>
                <legend>Edit Product</legend>
                    @include('backend.products.form')
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        {!! Form::button('Update',[
                            'class' => 'btn btn-primary',
                            'type' => 'submit',
                        ])!!}
                        
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection