@extends('layout.penjualnav')
@section('title', 'List Order')
@section('contents')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Pembelian
                <a href="{{'order-history'}}" class="btn btn-secondary float-right">History</a>
            </h3>

        <div class="row">
            <div class="table-responsive form-group">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" >
                            <thead>
                                <th>Tanggal Order</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                <tr>
                                    <td >{{ date('d-m-Y',strtotime($item->created_at))}}</td>
                                    <td >{{$item->tracking_no}}</td>
                                    <td >Rp {{number_format($item->total_price)}}</td>
                                    <td >{{$item->status == '0' ? 'Pending' : 'Completed'}}</td>
                                    <td style="text-align:center">
                                        <a href="{{url('admin/view-order2/'.$item->id)}}" class="btn btn-primary" >View</a>
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
</div>
@endsection
