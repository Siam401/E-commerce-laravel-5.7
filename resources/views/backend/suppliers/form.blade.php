

<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}


    <div class="col-sm-10">
        {!! Form::label('Title', null, ['class' => 'col-sm-2 col-form-label']) !!}
        {!! Form::text('title', null, [
                'placeholder' => 'Enter Title Title Here',
                'class' => 'form-control',
                'id' => 'Title',
            ]) !!}<br>
        {!! Form::label('Address', null, ['class' => 'col-sm-2 col-form-label']) !!}
        {!! Form::text('address', null, [
                        'placeholder' => 'Enter Address Here',
                        'class' => 'form-control',
                    ]) !!}
        <br>
        @if ($errors->has('title'))
            {{ $errors->first('title') }}
        @endif
    </div>
</div>