@extends('layout.core')
@section('title', 'checkout')
@section('contents')
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Checkout</a></li>

        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <form method="POST" action="{{ url('place-order') }}">
                    {{ csrf_field() }}
                    <h2 class="title">Checkout</h2>
                    <div class="so-onepagecheckout row">

                        <div class="col-right col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
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

                                                    @php
                                                        $total = 0;
                                                        $totalcheck = 0;
                                                        $tax = 0;
                                                        $taxtotal = 0;
                                                        $totalseluruh = 0;
                                                    @endphp
                                                    @foreach ($cartitem as $item)
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center"><a
                                                                        href="{{ url('view-category/' . $item->products->kategori->slug . '/' . $item->products->slug) }}"><img
                                                                            width="60px"
                                                                            src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}"
                                                                            alt="{{ $item->products->nama }}"
                                                                            title="{{ $item->products->nama }}"
                                                                            class="img-thumbnail"></a></td>
                                                                <td class="text-left"><a
                                                                        href="{{ url('view-category/' . $item->products->kategori->slug . '/' . $item->products->slug) }}">{{ $item->products->nama }}</a>
                                                                </td>
                                                                <td class="text-center">{{ $item->prod_qty }}</td>
                                                                <td class="text-right">Rp
                                                                    {{ number_format($item->products->selling_price) }}
                                                                </td>
                                                                @php

                                                                    $total = $item->products->selling_price * $item->prod_qty;
                                                                    $totalcheck += $item->products->selling_price * $item->prod_qty;
                                                                    $tax = $item->prod_qty * $item->products->tax;
                                                                    $taxtotal += $item->products->tax * $item->prod_qty;
                                                                    $totalseluruh = $totalcheck + $taxtotal + $ongkir;

                                                                @endphp
                                                                <td class="text-right">Rp {{ number_format($total) }}</td>
                                                            </tr>
                                                        </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="4">
                                                                <strong>Sub-Total:</strong>
                                                            </td>
                                                            <td class="text-right">Rp {{ number_format($totalcheck) }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Tax
                                                                    (-2.00):</strong></td>
                                                            <td class="text-right">Rp {{ number_format($taxtotal) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Ongkir:</strong></td>
                                                            <td class="text-right">Rp {{ number_format($ongkir) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Total:</strong>
                                                            </td>
                                                            <td class="text-right">Rp {{ number_format($totalseluruh) }}
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <div id="paypal-button-container" class="razorpay_btn"></div>
                                            <input type="hidden" name="payment_mode" value="COD">
                                            <button type="button" class="btn btn-primary w-100 razorpay_btn">Pay
                                                with RazorPay</button>
                                            <button type="submit" class="btn btn-success w-100"> Bayar COD
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End -->

        </div>
    </div>
    <!-- //Main Container -->
@endsection

@section('scripts')

    <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#provinsi').on('change', function() {
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: "POST",
                    url: "getkabupaten",
                    data: {
                        'id_provinsi': id_provinsi
                    },
                    cache: false,
                    success: function(msg) {
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error: function(data) {
                        console.log('error:', data)
                    },
                });
            })
        })
    </script>
@endsection
