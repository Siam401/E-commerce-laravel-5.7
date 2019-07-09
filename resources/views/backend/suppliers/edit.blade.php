@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Edit Supplier
            </div>
            <div class="float-right">
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary">List</a>
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
            {!! Form::model($supplier,[
                        'route' => ['suppliers.update', $supplier->id],
                        'method' => 'put'
                        ]) !!}
            <fieldset>
                <legend>Edit Supplier</legend>
                    @include('backend.suppliers.form')
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        {!! Form::button('Update', [
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