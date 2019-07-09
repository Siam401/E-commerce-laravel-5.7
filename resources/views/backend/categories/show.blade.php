@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            Category Details
        </div>
        <div class="float-right">
            <a href="{{ route('categories.index') }}" class="btn btn-primary">List</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                     <th>Title</th>
                </tr>
                
            </thead>
            <tr>
                @php
                    $sl=0;
                @endphp
                <td>{{++$sl}}</td>
                <td>{{ $category->title }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection




