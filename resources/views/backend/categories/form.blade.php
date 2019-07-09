
<!--<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Title', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::select('title', ['1' => 'Male', '2' => 'Female','3' => 'Kids'], null, [
                'placeholder' => 'Select Category',
                'class' => 'form-control',
                'id' => 'category_id',
            ]) !!}<br>
    </div>
</div>-->
<div class="form-group row">
    {!! Form::label('Title',null,['class' => 'col-sm-2 col-form-label']) !!}
    <div class='col-sm-10'>
        {{ Form::text('title' ,null,[
        'class' =>'form-control'
    ]) }}
    </div>
</div>
    
    






