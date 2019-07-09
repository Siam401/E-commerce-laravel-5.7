@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Create Brand
        </div>
        <div class="float-right">
            <a href="{{ route('brands.index') }}" class="btn btn-primary">List</a>
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

        {{--    <form action="{{ route('brands.store') }}" method="post">--}}
        {!! Form::open(['route' => 'suppliers.store']) !!}
        {{--@csrf--}}
        <fieldset>
            <legend>Add New Supplier</legend>
            {{--<input type="text" name="title" required placeholder="Enter Category Title Here"><br>--}}
            @include('backend.suppliers.form')
            <div class="form-group row">
                <div class="col-sm-10 text-center">
                    {!! Form::button('Add', [
                                                'class' => 'btn btn-primary',
                                                'type' => 'submit',
                                            ]) !!}
                </div>
            </div>
        </fieldset>
        {!! Form::close() !!}
        {{--</form>--}}
    </div>
</div>
@endsection