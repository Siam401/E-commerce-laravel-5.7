<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Title', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::text('title', null, [
                'class' => 'form-control',
                'id' => 'Title',
            ]) !!}<br>
        @if ($errors->has('title'))
            {{ $errors->first('title') }}
        @endif
    </div>
</div>

<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Brand', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::select('brand_id',$brands, null, [
                'placeholder' => 'Select Brand',
                'class' => 'form-control',
                'id' => 'brand_id',
            ]) !!}<br>
    </div>
</div>
<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Category', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::select('category_id',$categories, null, [
                'placeholder' => 'Select Category',
                'class' => 'form-control',
                'id' => 'category_id',
            ]) !!}<br>
    </div>
</div>

<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Sub Category', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::select('sub_category_id',$sub_categories, null, [
                'placeholder' => 'Select Sub Category',
                'class' => 'form-control',
                'id' => 'sub_category_id',
            ]) !!}<br>
    </div>
</div>



<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('image1', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::file('image1', [
                'class' => 'form-control',
                'id' => 'image1',
            ]) !!}<br>
        @if ($errors->has('image1'))
            {{ $errors->first('image1') }}
        @endif
    </div>
</div>

<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('image2', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::file('image2', [
                'class' => 'form-control',
                'id' => 'image2',
            ]) !!}<br>
        @if ($errors->has('image2'))
            {{ $errors->first('image2') }}
        @endif
    </div>
</div>
<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Price', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::text('price', null, [
                'class' => 'form-control',
                'id' => 'price',
            ]) !!}<br>
        @if ($errors->has('price'))
            {{ $errors->first('price') }}
        @endif
    </div>
</div>
<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Quantity', null, ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        {!! Form::text('quantity', null, [
                'class' => 'form-control',
                'id' => 'quantity',
            ]) !!}<br>
        @if ($errors->has('quantity'))
            {{ $errors->first('Quantity') }}
        @endif
    </div>
</div>
<div class="form-group row">
    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
    {!! Form::label('Suppliers', null , ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10">
        @foreach ($suppliers as $supplier)
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('supplier_ids[]', $supplier->id, in_array($supplier->title, $selectedSuppliers), ['class' => 'field']) }}
                    {{ $supplier->title }}
                </label>
            </div>
        @endforeach
    </div>
</div>





