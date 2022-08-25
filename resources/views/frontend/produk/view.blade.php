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
                                <div class="ratings">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div>

                                <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
                                |
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a
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

                                <div class="stock"><span>Availability:</span>
                                    <span class="status-stock">In Stock</span>
                                </div>
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
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
                    </ul>
                    <div class="tab-content col-xs-12">
                        <div id="tab-1" class="tab-pane fade active in">
                            <p>
                                {{ $produk->description }} <br>
                                <!-- <h3>
             Features:</h3>
            <p>
             Unrivaled display performance</p>
            <ul>
             <li>
              30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.</li>
             <li>
              Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.</li>
             <li>
              Wide-format design for simultaneous display of two full pages of text and graphics.</li>
             <li>
              Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks</li>
             <li>
              Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.</li>
             <li>
              Lightning-fast pixel response for full-motion digital video playback.</li>
             <li>
              Support for 16.7 million saturated colors, for use in all graphics-intensive applications.</li>
            </ul>
            <p>
             Simple setup and operation</p>
            <ul>
             <li>
              Single cable with elegant breakout for connection to DVI, USB and FireWire ports</li>
             <li>
              Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.</li>
             <li>
              Two FireWire 400 ports to support iSight and other desktop peripherals</li>
            </ul>
            <p>
             Sleek, elegant design</p>
            <ul>
             <li>
              Huge virtual workspace, very small footprint.</li>
             <li>
              Narrow Bezel design to minimize visual impact of using dual displays</li>
             <li>
              Unique hinge design for effortless adjustment</li>
             <li>
              Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)</li>
            </ul>
            <h3>
             Technical specifications</h3>
            <p>
             <b>Screen size (diagonal viewable image size)</b></p>
            <ul>
             <li>
              Apple Cinema HD Display: 30 inches (29.7-inch viewable)</li>
            </ul>
            <p>
             <b>Screen type</b></p>
            <ul>
             <li>
              Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)</li>
            </ul> -->
                                <!-- <p>
             <b>Resolutions</b></p>
            <ul>
             <li>
              2560 x 1600 pixels (optimum resolution)</li>
             <li>
              2048 x 1280</li>
             <li>
              1920 x 1200</li>
             <li>
              1280 x 800</li>
             <li>
              1024 x 640</li>
            </ul>
            <p>
             <b>Display colors (maximum)</b></p>
            <ul>
             <li>
              16.7 million</li>
            </ul>
            <p>
             <b>Viewing angle (typical)</b></p>
            <ul>
             <li>
              170° horizontal; 170° vertical</li>
            </ul>
            <p>
             <b>Brightness (typical)</b></p>
            <ul>
             <li>
              30-inch Cinema HD Display: 400 cd/m2</li>
            </ul>
            <p>
             <b>Contrast ratio (typical)</b></p>
            <ul>
             <li>
              700:1</li>
            </ul>
            <p>
             <b>Response time (typical)</b></p>
            <ul>
             <li>
              16 ms</li>
            </ul>
            <p>
             <b>Pixel pitch</b></p>
            <ul>
             <li>
              30-inch Cinema HD Display: 0.250 mm</li>
            </ul>
            <p>
             <b>Screen treatment</b></p>
            <ul>
             <li>
              Antiglare hardcoat</li>
            </ul>
            <p>
             <b>User controls (hardware and software)</b></p>
            <ul>
             <li>
              Display Power,</li>
             <li>
              System sleep, wake</li>
             <li>
              Brightness</li>
             <li>
              Monitor tilt</li>
            </ul>
            <p>
             <b>Connectors and cables</b><br>
             Cable</p>
            <ul>
             <li>
              DVI (Digital Visual Interface)</li>
             <li>
              FireWire 400</li>
             <li>
              USB 2.0</li>
             <li>
              DC power (24 V)</li>
            </ul>
            <p>
             Connectors</p>
            <ul>
             <li>
              Two-port, self-powered USB 2.0 hub</li>
             <li>
              Two FireWire 400 ports</li>
             <li>
              Kensington security port</li>
            </ul>
            <p>
             <b>VESA mount adapter</b><br>
             Requires optional Cinema Display VESA Mount Adapter (M9649G/A)</p>
            <ul>
             <li>
              Compatible with VESA FDMI (MIS-D, 100, C) compliant mounting solutions</li>
            </ul>
            <p>
             <b>Electrical requirements</b></p>
            <ul>
             <li>
              Input voltage: 100-240 VAC 50-60Hz</li>
             <li>
              Maximum power when operating: 150W</li>
             <li>
              Energy saver mode: 3W or less</li>
            </ul>
            <p>
             <b>Environmental requirements</b></p>
            <ul>
             <li>
              Operating temperature: 50° to 95° F (10° to 35° C)</li>
             <li>
              Storage temperature: -40° to 116° F (-40° to 47° C)</li>
             <li>
              Operating humidity: 20% to 80% noncondensing</li>
             <li>
              Maximum operating altitude: 10,000 feet</li>
            </ul>
            <p>
             <b>Agency approvals</b></p>
            <ul>
             <li>
              FCC Part 15 Class B</li>
             <li>
              EN55022 Class B</li>
             <li>
              EN55024</li>
             <li>
              VCCI Class B</li>
             <li>
              AS/NZS 3548 Class B</li>
             <li>
              CNS 13438 Class B</li>
             <li>
              ICES-003 Class B</li>
             <li>
              ISO 13406 part 2</li>
             <li>
              MPR II</li>
             <li>
              IEC 60950</li>
             <li>
              UL 60950</li>
             <li>
              CSA 60950</li>
             <li>
              EN60950</li>
             <li>
              ENERGY STAR</li>
             <li>
              TCO '03</li>
            </ul>
            <p>
             <b>Size and weight</b><br>
             30-inch Apple Cinema HD Display</p>
            <ul>
             <li>
              Height: 21.3 inches (54.3 cm)</li>
             <li>
              Width: 27.2 inches (68.8 cm)</li>
             <li>
              Depth: 8.46 inches (21.5 cm)</li>
             <li>
              Weight: 27.5 pounds (12.5 kg)</li>
            </ul>
            <p>
             <b>System Requirements</b></p>
            <ul>
             <li>
              Mac Pro, all graphic options</li>
             <li>
              MacBook Pro</li>
             <li>
              Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT DDL or better</li>
             <li>
              Power Mac G5 (PCI Express), all graphics options</li>
             <li>
              PowerBook G4 with dual-link DVI support</li>
             <li>
              Windows PC and graphics card that supports DVI ports with dual-link digital bandwidth and VESA DDC standard for plug-and-play setup</li>
            </ul> -->


                        </div>
                        <div id="tab-review" class="tab-pane fade">
                            <form>
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                <td class="text-right">29/07/2015</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>Best this product opencart</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-right"></div>
                                </div>
                                <h2 id="review-title">Write a review</h2>
                                <div class="contacts-form">
                                    <div class="form-group"> <span class="icon icon-user"></span>
                                        <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                    </div>
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                    </div>
                                    <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not
                                        translated!</span>

                                    <div class="form-group">
                                        <b>Rating</b> <span>Bad</span>&nbsp;
                                        <input type="radio" name="rating" value="1"> &nbsp;
                                        <input type="radio" name="rating" value="2"> &nbsp;
                                        <input type="radio" name="rating" value="3"> &nbsp;
                                        <input type="radio" name="rating" value="4"> &nbsp;
                                        <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                    </div>
                                    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                </div>
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
                                            <img src="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" class="img-1 img-responsive" alt="{{$prod->nama}}">
                                            <img src="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" class="img-2 img-responsive" alt="{{$prod->nama}}">
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
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone &
                                    Tablets</a> <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: block;">
                                    <li><a href="category.html">Men's Watches</a></li>
                                    <li><a href="category.html">Women's Watches</a></li>
                                    <li><a href="category.html">Kids' Watches</a></li>
                                    <li><a href="category.html">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a> <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Cycling</a></li>
                                    <li><a href="category.html">Running</a></li>
                                    <li><a href="category.html">Swimming</a></li>
                                    <li><a href="category.html">Football</a></li>
                                    <li><a href="category.html">Golf</a></li>
                                    <li><a href="category.html">Windsurfing</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a> <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a> <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Men's Watches</a></li>
                                    <li><a href="category.html">Women's Watches</a></li>
                                    <li><a href="category.html">Kids' Watches</a></li>
                                    <li><a href="category.html">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a> <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a>
                                <span class="dcjq-icon"></span>
                            </li>
                            <li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a>
                                <span class="dcjq-icon"></span>
                            </li>
                            <li class=""><a href="category.html" class="cutom-parent">Sports</a> <span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Home &amp;
                                    Garden</a><span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a>
                                <span class="dcjq-icon"></span>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="module product-simple">
                <h3 class="modtitle">
                    <span>Latest products</span>
                </h3>
                <div class="modcontent">
                    <div class="extraslider">
                        <!-- Begin extraslider-inner -->
                        <div class="extraslider-inner">
                            <div class="item ">
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="#" target="_self" title="Mandouille short ">
                                                <img src="image/catalog/demo/product/80/8.jpg" alt="Mandouille short">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Mandouille short">Mandouille
                                                short </a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="content_price price">
                                            <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                            <span class="price-old">$76.00 </span>&nbsp;

                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="#" target="_self" title="Xancetta bresao ">
                                                <img src="image/catalog/demo/product/80/7.jpg" alt="Xancetta bresao">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Xancetta bresao">
                                                Xancetta bresao
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="content_price price">
                                            <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                            <span class="price-old">$89.00 </span>&nbsp;



                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="#" target="_self" title="Sausage cowbee ">
                                                <img src="image/catalog/demo/product/80/6.jpg" alt="Sausage cowbee">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Sausage cowbee">
                                                Sausage cowbee
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>

                                        <div class="content_price price">
                                            <span class="price product-price">
                                                $66.00
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="#" target="_self" title="Chicken swinesha ">
                                                <img src="image/catalog/demo/product/80/5.jpg" alt="Chicken swinesha">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Chicken swinesha">
                                                Chicken swinesha
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="content_price price">
                                            <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                            <span class="price-old">$56.00 </span>&nbsp;



                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                            </div>
                        </div>
                        <!--End extraslider-inner -->
                    </div>
                </div>
            </div>
            <div class="module banner-left hidden-xs ">
                <div class="banner-sidebar banners">
                    <div>
                        <a title="Banner Image" href="#">
                            <img src="image/catalog/banners/banner-sidebar.jpg" alt="Banner Image">
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <!--Left Part End -->
    </div>

</div>
<!-- //Main Container -->
@endsection
