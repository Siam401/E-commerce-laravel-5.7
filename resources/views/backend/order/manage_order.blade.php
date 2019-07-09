@extends('backend.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <center><h2>Manage Order</h2></center>
        </div>
        <div class="card-body">
            @include('backend.layouts.elements.error')
            <table id="order-listing" class="table">
                <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Customer Name</th>
                    <th>Order Total</th>
                    <th>Order Status</th>
                    <th>Payment Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>TK. {{ $order->order_total }}</td>
                        <?php if($order->status==0){?>
                        <td>pending</td>
                        <?php }else{ ?>
                        <td>Confirm</td>
                        <?php } ?>
                        <td>{{ $order->payment_type }}</td>
                        <td>
                            <a href="{{ route('view-order-detail', ['id'=>$order->id]) }}" class="btn btn-info btn-sm" title="View Order Details">View</a>
                            <a href="{{ route('delete-order-detail', ['id'=>$order->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want To Delete Permanently?')">Delete</a>
                            <a href="{{ route('order.invoice', ['id'=>$order->id]) }}" class="btn btn-danger btn-sm">Invoice</a>

                        @if($order->status == 0)
                            <a href="{{ route('change-status-order-detail', ['id'=>$order->id]) }}" class="btn btn-warning btn-sm" title="View Order Details">Confirm</a>

                        @endif
                                {{--<span class="glyphicon glyphicon-zoom-in"></span>--}}
                            {{--</a>--}}
                            {{--<a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-warning btn-xs" title="View Order Invoice">--}}
                                {{--<span class="glyphicon glyphicon-zoom-out"></span>--}}
                            {{--</a>--}}
                            {{--<a href="{{ route('download-invoice', ['id'=>$order->id]) }}" class="btn btn-primary btn-xs" title="Download Order Invoice">--}}
                                {{--<span class="glyphicon glyphicon-download"></span>--}}
                            {{--</a>--}}
                            {{--<a href="{{ route('edit-category', ['id'=>$order->id]) }}" class="btn btn-success btn-xs" title="Edit Order">--}}
                                {{--<span class="glyphicon glyphicon-edit"></span>--}}
                            {{--</a>--}}
                            {{--<a href="{{ route('delete-category', ['id'=>$order->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this !!')" title="Delete Order"/>--}}
                            {{--<span class="glyphicon glyphicon-trash"></span>--}}
                            {{--</a>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            <div class="float-right">
            </div>
        </div>
    </div>
@endsection
