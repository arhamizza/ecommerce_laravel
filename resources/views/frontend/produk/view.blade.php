
@extends('layout.core')
@section('title', 'Produk')
@section('contents')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="{{url('view-category/' .$produk->kategori->slug) }}">{{ $produk->kategori->nama }}</a></li>
        <li><a href="#">{{ $produk->nama }}</a></li>
    </ul>

    <div class="row  product_data">

        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">

            <div class="product-view">
                <div class="left-content-product">
                    <div class="row ">
                        <div class="content-product-left col-md-6 col-sm-12 col-xs-12">

                            <div class="large-image  vertical">
                                <img itemprop="image" class="product-image-zoom" src="{{ asset('atmin/assets/uploads/produk/'.$produk->image) }}" data-zoom-image="{{ asset('atmin/assets/uploads/produk/'.$produk->image) }}" title="{{ $produk->nama }}" alt="{{ $produk->nama }}">
                            </div>
                            <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
                        </div>

                        <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{ $produk->nama }}
                                    @if ($produk->trending == '1 ')
                                    <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                                    @endif
                                </h1>

                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                @php $ratenum = number_format($rating_value)
                                @endphp
                                <div class="ratings">
                                    <div class="rating-box">
                                        @for ($i =1; $i<= $ratenum; $i++) <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            @endfor
                                            @for ($j =$ratenum+1; $j<= 5; $j++) <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                @endfor
                                    </div>
                                </div>
                                @if($rating->count() > 0)
                                <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{$rating->count() }} reviews</a>
                                @else
                                No Ratings
                                @endif
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"> Write a
                                    review</a>
                            </div>



                            <div class="product-label form-group">
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">{{ number_format($produk->selling_price) }}</span>
                                    <span class="price-old">{{ number_format($produk->original_price) }}</span>
                                </div>

                                @if ($produk->qty > 0)
                                <label style="font-size: 14px;" class="label label-success">In Stock</label>

                                @else
                                <label class="label label-danger">Out of Stock</label>
                                @endif


                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="price-tax"><span>Pajak:</span> {{ $produk->tax }}</div>
                                    <div class="reward"><span>Price in reward points:</span> 400</div>
                                    <div class="brand"><span>Brand:</span><a href="#">Apple</a> </div>
                                    <div class="model"><span>Product Code:</span> Product 15</div>
                                    <div class="reward"><span>Reward Points:</span> 100</div>
                                </div>
                            </div>

                            <div class="short_description form-group">
                                <h4>OverView</h4>
                                {{ $produk->small_description }}
                            </div>
                            <div id="product">
                                <h4>Available Options</h4>
                                <div class="image_option_type form-group required">
                                    <label class="control-label">Colors</label>
                                    <ul class="product-options clearfix" id="input-option231">
                                        <li class="radio active">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="33"> <img src="image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="34"> <img src="image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="selected-option">
                                        </li>
                                    </ul>
                                </div>

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" style="-webkit-user-select: none;">
                                            <input type="hidden" value="{{$produk->id}}" class="prod_id">
                                            <label for="Quantity">Qty</label>
                                            <button class="input-group-text decrement-btn">−</button>
                                            <input class="form-control qty-input text-center" type="text" name="quantity" value="1">
                                            <button class="input-group-text increment-btn">+</button>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        @if ($produk->qty > 0)
                                        <button type="button" class="btn btn-mega btn-lg addToCartBtn float-start"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
                                        @endif
                                    </div>

                                    <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart addToWishlist"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- end box info product -->

                        </div>
                    </div>
                </div>


            </div>

            <!-- Product Tabs -->


            <div class="producttab ">
                <div class="tabsslider horizontal-tabs  col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>

                    </ul>
                    <div class="col-md-12 happy-about-us">
                        <div id="slider-happy-about-us" class="happy-ab">
                            <div class="title-happy-about">
                                <h2>Happy customer says</h2>
                            </div>

                            <div class="yt-content-slider sm_imageslider slider-happy-client" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <div class="item">
                                    <div class="ct-why">
                                        <div class="client-say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis neque eget nulla. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</div>
                                        <p class="client-info-about"><span class="name">- Mama Duo - </span>Social Media Strategist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content col-xs-12">
                        <div id="tab-1" class="tab-pane fade active in">
                            <p>
                                {{ $produk->description }} <br>
                        </div>
                        <div id="tab-review" class="tab-pane fade">
                            <form action="{{url('/add-rating') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $produk->id }}">
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            @foreach ($rating as $rat)
                                            <tr>
                                                <td style="width: 40%;"><strong>Akun User = {{ $rat->User->name }} </strong></td>
                                                <td style="width: 40%;"><strong>Nama User = {{ $rat->User->first_name }} {{ $rat->User->last_name }} </strong></td>
                                                <td class="text-right">{{ $rat->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>{{ $rat->review }}</p>

                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    @for ($i =1; $i<= $rat->stars_rated; $i++) <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        @endfor
                                                                        @for ($j =$rat->stars_rated+1; $j<= 5; $j++) <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            @endfor
                                                                </div>
                                                            </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-right"></div>
                                </div>
                                <h2 id="review-title">Write a review </h2>
                                <div class="contacts-form">
                                    <div class="form-group"> <span class="icon icon-user"></span>
                                        @if(is_null(Auth::user()))
                                        <h2><label class="label label-danger">Login dulu</label></h2>
                                        @else
                                        <h3><span class="label label-warning">Nama User = {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></h3>
                                        @endif

                                    </div>
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <textarea class="form-control" id="review" name="review" rows="3"></textarea>
                                    </div>

                                    <div class="rating-css">
                                        <div class="star-icon">
                                            @if($user_rating)
                                            @for ($i =1; $i<= $user_rating->stars_rated; $i++)

                                                <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                                                <label for="rating{{$i}}" class="fa fa-star"></label>
                                                @endfor
                                                @for ($j = $user_rating->stars_rated+1; $j <= 5; $j++)
                                                <input type="radio" value="{{$j}}" name="product_rating" id="rating{{$j}}">
                                                    <label for="rating{{$j}}" class="fa fa-star"></label>
                                                    @endfor

                                                    @else
                                                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                    <label for="rating1" class="fa fa-star"></label>
                                                    <input type="radio" value="2" name="product_rating" id="rating2">
                                                    <label for="rating2" class="fa fa-star"></label>
                                                    <input type="radio" value="3" name="product_rating" id="rating3">
                                                    <label for="rating3" class="fa fa-star"></label>
                                                    <input type="radio" value="4" name="product_rating" id="rating4">
                                                    <label for="rating4" class="fa fa-star"></label>
                                                    <input type="radio" value="5" name="product_rating" id="rating5">
                                                    <label for="rating5" class="fa fa-star"></label>
                                                    @endif
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>
                        <div id="tab-4" class="tab-pane fade">
                            <a href="#">Monitor</a>,
                            <a href="#">Apple</a>
                        </div>
                        <div id="tab-5" class="tab-pane fade">
                            <p>Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                                At vero eos et accusam et justo duo
                                dolores et ea rebum. Stet clita kasd
                                gubergren, no sea takimata sanctus est
                                Lorem ipsum dolor sit amet. Lorem ipsum
                                dolor sit amet, consetetur sadipscing
                                elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. </p>
                            <p>At vero eos et accusam et justo duo dolores
                                et ea rebum. Stet clita kasd gubergren,
                                no sea takimata sanctus est Lorem ipsum
                                dolor sit amet. Lorem ipsum dolor sit
                                amet, consetetur sadipscing elitr.</p>
                            <p>Sed diam nonumy eirmod tempor invidunt
                                ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam
                                et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Product Tabs -->

            <!-- Related Products -->
            <div class="related titleLine products-list grid module ">
                <h3 class="modtitle">Related Products </h3>

                <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    @foreach ($produk2 as $prod)
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="{{url('view-category/' .$kategori->slug. '/' .$prod->slug) }}" target="_self" title="{{$prod->nama}}">
                                            <img src="{{ asset('atmin/assets/uploads/produk/' .$prod->image) }}" class="img-1 img-responsive" alt="{{$prod->nama}}">
                                            <img src="{{ asset('atmin/assets/uploads/produk/' .$prod->image) }}" class="img-2 img-responsive" alt="{{$prod->nama}}">
                                        </a>
                                    </div>

                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">

                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4><a href="{{url('view-category/' .$kategori->slug. '/' .$prod->slug) }}" title="Pastrami bacon" target="_self">{{$prod->nama}}</a></h4>
                                        <div class="price">{{number_format($prod->selling_price)}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end Related  Products-->




        </div>
        <!--Middle Part End-->
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">

				<div class="module category-style">
                	<h3 class="modtitle">Categories</h3>
                	<div class="modcontent">
                		<div class="box-category">
                			<ul id="cat_accordion" class="list-group">
                            @foreach ($category as $kat)
                            <li class=""><a href="{{ url('view-category/' . $kat->slug) }}" class="cutom-parent">{{ $kat->nama }}</a>  <span class="dcjq-icon"></span></li>
                            @endforeach
                			</ul>
                		</div>


                	</div>
                </div>


        </aside>
        <!--Left Part End -->
    </div>

</div>
<!-- //Main Container -->
@endsection

