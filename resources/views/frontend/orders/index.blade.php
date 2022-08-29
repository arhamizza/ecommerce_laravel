@extends('layout.core')
@section('title', 'My Orders')
@section('contents')

<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('my-orders') }}">Pembelian</a></li>
    </ul>
    <div class="row">
        <div class="table-responsive form-group">
            <div class="card">
                <div class="card-header">
                    <h4>Pembelian</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" >
                        <thead>
                            <th>Tracking Number</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td style="text-align:center">{{$item->tracking_no}}</td>
                                <td style="text-align:center">{{number_format($item->total_price)}}</td>
                                <td style="text-align:center">{{$item->status == '0' ? 'Pending' : 'Completed'}}</td>
                                <td style="text-align:center">
                                    <a href="{{url('view-order/'.$item->id)}}" class="btn btn-primary" >View</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
