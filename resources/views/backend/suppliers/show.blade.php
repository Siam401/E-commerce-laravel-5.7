@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Supplier Details
            </div>
            <div class="float-right">
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary">List</a>
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
                    <td>Supplier Name</td>
                    <td>{{ $supplier->title }}</td>
                </tr>
                <tr>
                    <td>Supplier Address</td>
                    <td>{{ $supplier->address }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection




