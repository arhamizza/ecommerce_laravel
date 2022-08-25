@extends('layout.core')
@section('title', 'Wishlist')
@section('contents')




    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ url('wishlist') }}">Wishlist</a></li>
        </ul>

        @if ($wishlist-> count() > 0)


        <div class="row">
            <div id="content" class="col-sm-12">
                <h2 class="title">Wish List</h2>
                <div class="table-responsive form-group">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-left">Unit Price</td>
                                <td class="text-left">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlist as $item)
                                <tr class="product_data">
                                    <td class="text-center"><a href="product.html"><img width="90px"
                                                src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}"
                                                alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                class="img-thumbnail" /></a></td>
                                    <td class="text-left"><a href="{{url('view-category/' .$item->products->kategori->slug. '/' .$item->products->slug) }}">{{ $item->products->nama }}</a><br />
                                    </td>
                                    <td class="text-center" width="200px">
                                        <div class="input-group btn-block quantity">
                                            <span class="input-group-text">
                                            <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                            @if ($item->products->qty >= $item->prod_qty)
                                            <h5>In Stock</h5>
                                            <label for ="quantity"></label>
                                            <button class="input-group-text decrement-btn">−</button>
                                            <input class="form-control qty-input text-center" type="text"
                                            name="quantity" value="1">
                                            <button class="input-group-text increment-btn">+</button>
                                        </div>
                                    @else
                                        <h5>Out of Stock</h5>
                                    @endif

                                    </td>
                                    <td class="text-left">Rp. {{$item->products->selling_price}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary addToCartBtn"
                                        title="" data-toggle="tooltip"
                                        onclick="" type="button"
                                        data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <a class="btn btn-danger remove-wishlist-item" title="" data-toggle="tooltip"
                                        href="" data-original-title="Remove"><i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        @else
        <div class="card-body text-center">
            <h2>Kamu tidak punya <i class="fa fa-heart"></i>  Wish List</h2>
            <br>
            <a href="{{url ('/')}}" class = "btn btn-primary w-100 float-end">Cari Wish List Kamu</a>
        </div>
    </div>
    @endif

@endsection
