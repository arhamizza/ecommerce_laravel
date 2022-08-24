@extends('layout.core')
@section('title', 'Detail Orders')
@section('contents')

<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('my-orders') }}">Detail Pembelian</a></li>
    </ul>
    <div class="row">
        <div class="table-responsive form-group">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Pembelian</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <div class="border p-2">{{$orders->fname}}</div>
                            <label for="">Last Name</label>
                            <div class="border p-2">{{$orders->lname}}</div>
                            <label for="">Email</label>
                            <div class="border p-2">{{$orders->email}}</div>
                            <label for="">No. Hp</label>
                            <div class="border p-2">{{$orders->phone}}</div>
                            <label for="">Shipping Address</label>
                            <div class="border p-2">
                                {{$orders->address1}},
                                {{$orders->address2}},
                                {{$orders->provinsi}},
                                {{$orders->kota}},
                                {{$orders->kecamatan}},
                                {{$orders->kelurahan}},
                            </div>
                            <label for="">Kode Pos</label>
                            <div class="border p-2">{{$orders->postcode}}</div>

                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered" >
                                <thead>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                    <tr>
                                        <td style="text-align:center">{{$item->products->nama}}</td>
                                        <td style="text-align:center">{{$item->qty}}</td>
                                        <td style="text-align:center">{{number_format($item->price)}}</td>
                                        <td class="text-center">
                                            <img src="{{asset('atmin/assets/uploads/produk/'.$item->products->image)}}" width="90px" alt="{{$item->products->name}}" class="img-thumbnail">

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4>Total transaksi : <span class="float-end">{{number_format($orders->total_price)}}</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
