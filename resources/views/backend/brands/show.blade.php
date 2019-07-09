@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Brand Details
            </div>
            <div class="float-right">
                <a href="{{ route('brands.index') }}" class="btn btn-primary">List</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tr>
                    <td>Brand Name</td>
                    <td>{{ $brand->title }}</td>
                </tr>
                <tr>
                    <td>Brand Image</td>
                    <td><img src="{{ asset('uploads/brands/'.$brand->image) }}"></td>
                </tr>
            </table>
        </div>
    </div>
@endsection




