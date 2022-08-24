@extends('layout.atmin')
@section('title', 'Detail Orders')
@section('contents')

<div class="main-container container">
    <div class="row">
        <div class="table-responsive form-group">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Pembelian</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for=""><b>First Name</b></label>
                            <div class="border p-2">{{$orders->fname}}</div>
                            <br>
                            <label for=""><b>Last Name</b></label>
                            <div class="border p-2">{{$orders->lname}}</div>
                            <br>
                            <label for=""><b>Email</b></label>
                            <div class="border p-2">{{$orders->email}}</div>
                            <br>
                            <label for=""><b>No. Hp</b></label>
                            <div class="border p-2">{{$orders->telephone}}</div>
                            <br>
                            <label for=""><b>Shipping Address</b></label>
                            <div class="border p-2">
                                {{$orders->address1}},
                                {{$orders->provinsi}},
                                {{$orders->kota}},
                                {{$orders->kecamatan}},
                                {{$orders->kelurahan}}
                            </div>
                            <br>
                            <label for=""><b>Kode Pos</b></label>
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
                                            <img src="{{asset('atmin/assets/uploads/produk/'.$item->products->image)}}" width="150px" alt="{{$item->products->name}}">

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <h6>Total transaksi : <span class="float-right">Rp {{number_format($orders->total_price)}}</span></h6>
                            <br>
                            <div class="dropdown">
                                <label for=""><h6>Order Status :</h6></label>
                                <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <select class="form-control mb-3" name="order_status">
                                            <option {{$orders->status == '0'? 'selected':''}}  value="0">Pending</option>
                                            <option {{$orders->status == '1'? 'selected':''}}  value="1">Complete</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary float-right">Update</button>
                                    </div>
                                </form>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
