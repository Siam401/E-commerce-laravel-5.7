@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Deleted Sub_categories
            </div>
            <div class="float-right">
                <a href="{{ route('sub_categories.index') }}" class="btn btn-primary">List</a>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="100">SL#</th>
                    <th>Title</th>
                    <th width="220" class="text-right">Action</th>
                </tr>
                @php $serial = 0; @endphp
                @foreach($sub_categories as $sub_category)
                    <tr>
                        <td>{{ ++$serial }}</td>
                        <td>{{ $sub_category->title }}</td>
                        <td class="text-right">
                            <a href='{{route("sub_categories.show",$sub_category->id)}}' class='btn btn-sm btn-info'>Show</a>
                            <a href="{{ route('sub_categories.restore', $sub_category->id) }}" class="btn btn-sm btn-warning">Restore</a>
                            {!! Form::open([
                                            'route' => ['sub_categories.delete', $sub_category->id],
                                            'method' => 'delete',
                                            'files' =>true,
                                            'style' => 'display:inline',
                                        ]) !!}
                            {!! Form::button('Delete',[
                                    'type' => 'submit',
                                    'class' => "btn btn-sm btn-danger",
                                    'onclick' => 'return confirm("Are You Sure Want To Delete Permanently ?")',

                            ]) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection