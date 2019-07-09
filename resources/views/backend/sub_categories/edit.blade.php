@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Edit Category
            </div>
            <div class="float-right">
                <a href="{{ route('sub_categories.index') }}" class="btn btn-primary">List</a>
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
              {!! Form::model($sub_category,[
                        'route' => ['sub_categories.update',$sub_category->id],
                        'method' => 'put',
                        'files' => true,
                        ])!!}
            <fieldset>
                <legend>Edit Category</legend>
                    @include('backend.sub_categories.form')
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