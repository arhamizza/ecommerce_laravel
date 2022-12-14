@extends('layout.core')
@section('title', 'Cart')
@section('contents')




<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('cart') }}">Keranjang</a></li>
    </ul>

    <div class="row ">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12 cartitems">
            <h2 class="title">Keranjang</h2>
            <div class="table-responsive form-group ">
                @if ($cartitems->count() > 0)
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-left">Unit Price</td>
                            <td class="text-left">Total</td>
                            <td class="text-left">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        $totalcheck = 0;
                        $tax = 0;
                        $taxtotal = 0;
                        $totalseluruh =0;
                        @endphp
                        @foreach ($cartitems as $item)
                        <tr class="product_data">
                            <td class="text-center"><a href="product.html"><img width="90px" src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                            <td class="text-left"><a href="{{url('view-category/' .$item->products->kategori->slug. '/' .$item->products->slug) }}">{{ $item->products->nama }}</a><br />
                            </td>
                            </td>
                            <td class="text-left" width="200px">
                                <div class="option quantity">
                                    <div class="input-group quantity-control" style="-webkit-user-select: none;">
                                        <span class="input-group-text">
                                            <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                            @if ($item->products->qty >= $item->prod_qty)
                                            <label for="quantity"></label>
                                            <button class="input-group-text increment-btn btn-danger">???</button>&nbsp;

                                            <input class="form-control qty-input text-center" type="text" name="quantity" value="{{$item->prod_qty}}">
                                            <button class="input-group-text increment-btn btn-success">+</button>

                                        </span>
                                    </div>
                                </div>
                                @php
                                $total = $item->products->selling_price * $item->prod_qty;
                                $totalcheck += $item->products->selling_price * $item->prod_qty;
                                $tax = $item->prod_qty * $item->products->tax;
                                $taxtotal += $item->products->tax * $item->prod_qty;
                                $totalseluruh = $totalcheck + $taxtotal ;
                                @endphp
                                @else
                                <h6>Out of Stock</h6>
                                @endif

                            </td>
                            <td class="text-left">Rp. {{number_format($item->products->selling_price)}}</td>

                            <td class="text-left">Rp. {{number_format($total)}}</td>
                            <td class="text-center btn-d"><button type="button" data-toggle="tooltip" title="Remove" class="btn-danger"> <i class="fa fa-times-circle">&nbsp;&nbsp;Delete&nbsp;</i></button></td>                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right">
                                    <strong>Sub-Total:</strong>
                                </td>
                                <td class="text-right">Rp. {{number_format($totalcheck)}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong>Tax:</strong>
                                </td>
                                <td class="text-right">Rp. {{number_format($taxtotal)}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong>Total:</strong>
                                </td>
                                <td class="text-right">Rp. {{number_format($totalseluruh)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left"><a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a></div>

                @if (Auth::user()->address1 == NULL)
                <div class="pull-right"><a href="{{url('alamat')}}" class="btn btn-success">Isi Alamat</a></div>

                @else
                <div class="pull-right"><a href="{{url('checkout')}}" class="btn btn-success">Checkout</a></div>

                @endif



            </div>
        </div>
        <!--Middle Part End -->
    </div>
    @else
    <div class="card-body text-center">
        <h2>Your <i class="fa fa-shopping-cart"></i> Cart is Empty!</h2>
        <a href="{{url ('/')}}" class="btn btn-primary w-100 float-end">Continue Shopping</a>
    </div>
</div>

@endif
@endsection
