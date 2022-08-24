@extends('layout.core')
@section('title', 'Cart')
@section('contents')




    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ url('cart') }}">Keranjang</a></li>
        </ul>
        @if ($cartitems->count() > 0)
        <div class="row ">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <h2 class="title">Keranjang</h2>
                <div class="table-responsive form-group">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            $totalcheck = 0;
                            @endphp
                            @foreach ($cartitems as $item)
                                <tr class="product_data">
                                    <td class="text-center"><a href="product.html"><img width="90px"
                                                src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}"
                                                alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                class="img-thumbnail" /></a></td>
                                    <td class="text-left"><a href="{{url('view-category/' .$item->products->kategori->slug. '/' .$item->products->slug) }}">{{ $item->products->nama }}</a><br />
                                    </td>
                                    <td class="text-left" width="200px">
                                        <div class="input-group btn-block quantity">
                                            <span class="input-group-text">
                                            <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                            @if ($item->products->qty >= $item->prod_qty)
                                            <label for ="quantity"></label>
                                            <button class="input-group-text changeQuantity decrement-btn">−</button>
                                            <input class="form-control qty-input text-center" type="text"
                                            name="quantity" value="{{$item->prod_qty}}">
                                            <button class="input-group-text changeQuantity increment-btn">+</button>
                                            <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger delete-cart-item" onClick=""><i class="fa fa-times-circle"></i></button>
                                            </span>
                                        </div>
                                    @php
                                    $total = $item->products->selling_price * $item->prod_qty;
                                    $totalcheck += $item->products->selling_price * $item->prod_qty;
                                    @endphp
                                    @else
                                        <h6>Out of Stock</h6>
                                    @endif

                                    </td>
                                    <td class="text-right">Rp. {{$item->products->selling_price}}</td>

                                    <td class="text-right">Rp. {{$total}}</td>
                                </tr>
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
                                    <td class="text-right">Rp. {{$totalcheck}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <strong>Flat Shipping Rate:</strong>
                                    </td>
                                    <td class="text-right">$4.69</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <strong>Eco Tax (-2.00):</strong>
                                    </td>
                                    <td class="text-right">$5.62</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <strong>VAT (20%):</strong>
                                    </td>
                                    <td class="text-right">$34.68</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <strong>Total:</strong>
                                    </td>
                                    <td class="text-right">$213.70</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="buttons">
                    <div class="pull-left"><a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a></div>
                    <div class="pull-right"><a href="{{url('checkout')}}" class="btn btn-primary">Checkout</a></div>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
        @else
        <div class="card-body text-center">
            <h2>Your <i class="fa fa-shopping-cart"></i> Cart is Empty!</h2>
            <a href="{{url ('/')}}" class = "btn btn-primary w-100 float-end">Continue Shopping</a>
        </div>
    </div>


    @endif
@endsection
