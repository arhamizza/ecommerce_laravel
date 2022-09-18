@extends('layout.core')
@section('title', 'Dashboard')
@section('contents')
<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        <div class="container">
            <div class="box-content1">
                <div class="top-tags">
                    <ul>
                        <li>
                            <h2>Kategori Paling Dikunjungi:</h2>
                        </li>
                        @foreach ($top_collection as $kat)
                        <li><a href="{{ url('view-category/' . $kat->slug) }}">{{ $kat->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>


                <div class="module sohomepage-slider ">
                    <div class="yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/7.jpg') }}" height="720" width="1680" alt="slider1" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/2.jpg') }}" height="720" width="1680" alt="slider2" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/3.jpg') }}" alt="slider3" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/4.jpg') }}" alt="slider4" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/5.jpg') }}" height="720" width="1680" alt="slider5" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/6.jpg') }}" height="720" width="1680" alt="slider6" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('image/banner/1.jpg') }}" height="720" width="1680 alt=" slider7" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="loadeding"></div>
                </div>
                <div class="block-policy4">
                    <div class="inner">
                        <div class="policy policy1"><a title="free shipping on all orders" href="#"><span><i class="fa fa-truck"></i>Free Shipping worldwide</span></a>
                        </div>
                        <div class="policy policy2"><a title="money back guarantee" href="#"><span><i class="fa fa-usd"></i>money back guarantee</span></a>
                        </div>
                        <div class="policy policy3"><a title="LOWEST PRICE GUARANTEE" href="#"><span><i class="fa fa-calendar"></i>LOWEST PRICE GUARANTEE</span></a>
                        </div>
                        <div class="policy policy4"><a title="online support 24/24" href="#"><span><i class="fa fa-umbrella"></i>online support 24/24</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box-content2 ">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 box-left">
                    <!-- Deals -->
                    <div class="module deals-layout4">
                        <h3 class="modtitle"><span>Deals of the days</span></h3>
                        <div class="modcontent">
                            <div class="so-deal style2">
                                <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    @foreach ($top_produk as $top)
                                    <div class="item product-layout product-grid2 product_data">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <div class="box-label">
                                                            <span class="label label-sale">-13%</span>
                                                        </div>
                                                        <a href="{{url('view-category/' .$top->kategori->slug. '/' .$top->slug) }}" target="_self" title="product">
                                                            <img src="{{ asset('atmin/assets/uploads/produk/' . $top->image) }}" alt="{{ Str::limit($top->nama, 15) }}" class="img-responsive">
                                                        </a>

                                                    </div>
                                                    <!--quickview-->
                                                    <div class="so-quickview">
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                            </div>
                                            <div class="right-block">

                                                <div class="caption">
                                                    <h4><a href="{{url('view-category/' .$top->kategori->slug. '/' .$top->slug) }}" target="_self" title="{{ $top->nama }}">{{ $top->nama }}</a></h4>


                                                    <p class="desc">{{ $top->description }}
                                                    </p>
                                                    <div class="form-group box-info-product">
                                                        <div class="option quantity">
                                                            <div class="input-group quantity-control" style="-webkit-user-select: none;">
                                                                <input type="hidden" value="{{$top->id}}" class="prod_id">
                                                                <input class="form-control qty-input text-center hidden" type="text" name="quantity" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="cart">
                                                            @if ($top->qty > 0)
                                                            <button type="button" class="btn btn-mega btn-lg addToCartBtn float-start"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
                                                            @endif
                                                            <a class="icon" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart addToWishlist"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price"> <span class="price-new">Rp {{ number_format($top->selling_price)}}</span>
                                                        <span class="price-old">Rp {{ number_format($top->original_price)}}</span>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Deals -->
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 extra-right">
                    <div class="module so-extraslider-ltr ">
                        <h3 class="modtitle"><span>Trending products</span></h3>
                        <div class="modcontent responsive">
                            <div class="so-extraslider">

                                <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">

                                    @foreach ($featured_products as $prod)
                                    <div class="item product_data">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">
                                                            <div class="box-label">
                                                                <span class="label label-sale">-13%</span>
                                                            </div>
                                                            <a href="{{url('view-category/' .$prod->kategori->slug. '/' .$prod->slug) }}" target="_self" title="product">
                                                                <img src="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" width="270px" height="270px" alt="{{ $prod->nama }}" class="img-responsive">
                                                            </a>

                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                                    view</span></a>
                                                        </div>
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{url('view-category/' .$prod->kategori->slug. '/' .$prod->slug) }}" target="_self" title="{{ $prod->nama }}">{{ Str::limit($prod->nama, 12) }}</a>
                                                        </h4>


                                                        <p class="price"> <span class="price-new">Rp {{ number_format($prod->selling_price) }}</span>
                                                            <span class="price-old">Rp {{ number_format($prod->original_price) }}</span>
                                                        </p>

                                                        <div class="option quantity">
                                                            <div class="input-group quantity-control" style="-webkit-user-select: none;">
                                                                <input type="hidden" value="{{$prod->id}}" class="prod_id">
                                                                <input class="form-control qty-input text-center hidden" type="text" name="quantity" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="button-group">
                                                            @if ($prod->qty > 0)
                                                            <button type="button" class="addToCart addToCartBtn"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
                                                            @endif
                                                            <button class="btn-button addToWishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i><span>Add to Wish List</span> </button>
                                                        </div>

                                                        <div class="form-group box-info-product">



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="so-categories custom-slidercates module clearfix">
                <h3 class="modtitle"><span>Top Category</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

                    @foreach ($top_collection as $kat)
                        <div class="content-box">
                            <div class="image-cat" bg="primary">
                                <a href="{{ url('view-category/' . $kat->slug) }}" title="{{ $kat->nama }}" target="_self">
                                    <img src="{{ asset('atmin/assets/uploads/kategori/' . $kat->image) }}" width="308px" height="120px" title="{{ $kat->nama }}" alt="{{ $kat->nama }}" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="{{ $kat->nama }} " target="_self">{{ $kat->nama }}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="module so-extraslider-ltr extra-layout4 cus1">
                <div class="form-group col-pre">
                <div class="m-head">Mungkin yang kamu suka?<a href="#">View All</a></div>
                </div>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="yes" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            @foreach ($products as $item)
                            <div class="item product_data">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label label-sale">-13%</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="{{ asset('atmin/assets/uploads/produk/' . $item->image) }}" alt="{{$item->nama}}" class="img-responsive">
                                                    </a>

                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>
                                                <!--end quickview-->
                                            </div>
                                        </div>

                                        <div class="right-block ">
                                            <div class="caption">
                                                <h4><a href="#" target="_self" title="{{$item->nama}}">{{ Str::limit($item->nama, 15) }}</a></h4>

                                                <p class="price"> <span class="price-new">{{number_format($item->selling_price)}}</span>
                                                    <span class="price-old">{{number_format($item->original_price)}}</span>
                                                </p>
                                                <div class="option quantity">
                                                    <div class="input-group quantity-control" style="-webkit-user-select: none;">
                                                        <input type="hidden" value="{{$prod->id}}" class="prod_id">
                                                        <input class="form-control qty-input text-center hidden" type="text" name="quantity" value="1">
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    @if ($prod->qty > 0)
                                                    <button type="button" class="addToCart addToCartBtn"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
                                                    @endif
                                                    <button class="btn-button addToWishlist" type="button" title="Add to Wish List"><i class="fa fa-heart"></i><span>Add to Wish List</span> </button>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="module so-latest-blog blog-home">
                <h3 class="modtitle"><span>Lihat Kategori</span></h3>
                <div class="modcontent clearfix">
                    <div class="so-blog-external">
                        <div class="yt-content-slider blog-external" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes" data-buttonpage="top">
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($more_cate as $kat)
                            @php
                            $no++;
                            @endphp

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="{{ url('view-category/' . $kat->slug) }}" target="_self">
                                        <img src="{{ asset('atmin/assets/uploads/kategori/' . $kat->image) }}" width="308" height="120" alt="{{ $kat->nama }}" />                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="{{ url('view-category/' . $kat->slug) }}" title="{{ $kat->nama }}" target="_self">{{ $kat->nama }}</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>{{$no}}</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- //Main Container -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
<script>
    swal("Error!", "{{ session('status') }}", "error");
</script>
@endif
@endsection
