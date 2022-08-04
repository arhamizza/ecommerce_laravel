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
                        <li><h2>Go Quickly to:</h2></li>
                        <li><a href="#">Fashions,</a></li>
                        <li><a href="#">Electronic,</a></li>
                        <li><a href="#">Furniture,</a></li>
                        <li><a href="#">Accessories,</a></li>
                        <li><a href="#">Shoes,</a></li>
                        <li><a href="#">Smartphone,</a></li>
                        <li><a href="#">Cellphone,</a></li>
                        <li><a href="#">Cameras,</a></li>
                        <li><a href="#">Latops,</a></li>
                        <li><a href="#">Tablets,</a></li>
                        <li><a href="#">Makeup,</a></li>
                        <li><a href="#">iPhone</a></li>
                    </ul>
                </div>
                <div class="module sohomepage-slider ">
                    <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="yt-content-slide">
                            <a href="#"><img src="image/catalog/slideshow/home4/slide-1.jpg" alt="slider1" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="image/catalog/slideshow/home4/slide-2.jpg" alt="slider2" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="image/catalog/slideshow/home4/slide-3.jpg" alt="slider3" class="img-responsive"></a>
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
            <div class="row box-content2">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 box-left">
                    <!-- Deals -->
                    <div class="module deals-layout4">
                        <h3 class="modtitle"><span>Deals of the days</span></h3>
                        <div class="modcontent">
                            <div class="so-deal style2">
                                <div class="extraslider-inner products-list yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <div class="box-label">
                                                            <span class="label label-sale">-13%</span>
                                                        </div>
                                                        <a href="#" target="_self" title="product">
                                                            <img src="image/catalog/demo/product/index2/330/1.jpg" alt="Ground round enim" class="img-responsive">
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
                                                    <h4><a href="#" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>

                                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">   <span class="price-new">$66.00</span>
                                                        <span class="price-old">$76.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                        </button>
                                                        <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>

                                                    </div>
                                                    <!--countdown box-->
                                                    <div class="item-time-w">

                                                        <div class="item-time">
                                                            <div class="item-timer">
                                                                <div class="defaultCountdown-30"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end countdown box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <div class="box-label">
                                                            <span class="label label-sale">-10%</span>
                                                        </div>
                                                        <a href="#" target="_self" title="product">
                                                            <img src="image/catalog/demo/product/index2/330/2.jpg" alt="Hofficia chicken" class="img-responsive">
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
                                                    <h4><a href="#" target="_self" title="Hofficia chicken">Hofficia chicken</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>

                                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">   <span class="price-new">$90.00</span>
                                                        <span class="price-old">$100.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                        </button>
                                                        <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>

                                                    </div>
                                                    <!--countdown box-->
                                                    <div class="item-time-w">

                                                        <div class="item-time">
                                                            <div class="item-timer">
                                                                <div class="defaultCountdown-30"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end countdown box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <div class="box-label">
                                                            <span class="label label-sale">-20%</span>
                                                        </div>
                                                        <a href="#" target="_self" title="product">
                                                            <img src="image/catalog/demo/product/index2/330/3.jpg" alt="Lastrami deserunt" class="img-responsive">
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
                                                    <h4><a href="#" target="_self" title="Lastrami deserunt">Lastrami deserunt</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>

                                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">   <span class="price-new">$45.00</span>
                                                        <span class="price-old">$56.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                        </button>
                                                        <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>

                                                    </div>
                                                    <!--countdown box-->
                                                    <div class="item-time-w">

                                                        <div class="item-time">
                                                            <div class="item-timer">
                                                                <div class="defaultCountdown-30"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end countdown box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Deals -->
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 extra-right">
                    <div class="module so-extraslider-ltr ">
                        <h3 class="modtitle"><span>Featured products</span></h3>
                        <div class="modcontent">
                            <div class="so-extraslider">

                                <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">
                                                            <div class="box-label">
                                                                <span class="label label-sale">-13%</span>
                                                            </div>
                                                            <a href="#" target="_self" title="product">
                                                                <img src="image/catalog/demo/product/index2/270/2.jpg" alt="Ground round enim" class="img-responsive">
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
                                                        <h4><a href="#" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>


                                                        <p class="price">   <span class="price-new">$66.00</span>
                                                            <span class="price-old">$76.00</span>
                                                        </p>
                                                        <div class="button-group">
                                                            <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                            </button>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                            </button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">

                                                            <a href="#" target="_self" title="product">
                                                                <img src="image/catalog/demo/product/index2/270/10.jpg" alt="Mapicola incididuv " class="img-responsive">
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
                                                        <h4><a href="#" target="_self" title="Mapicola incididuv">Mapicola incididuv </a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>


                                                        <p class="price">   <span class="price-new">$66.00</span>
                                                            <span class="price-old">$76.00</span>
                                                        </p>
                                                        <div class="button-group">
                                                            <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                            </button>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                            </button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">

                                                            <a href="#" target="_self" title="product">
                                                                <img src="image/catalog/demo/product/index2/270/3.jpg" alt="Corem ipsum dolor" class="img-responsive">
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
                                                        <h4><a href="#" target="_self" title="Corem ipsum dolor">Corem ipsum dolor</a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>


                                                        <p class="price">  $65
                                                        </p>
                                                        <div class="button-group">
                                                            <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                            </button>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                            </button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">
                                                            <div class="box-label">
                                                                <span class="label-product label-new">New</span>
                                                            </div>
                                                            <a href="#" target="_self" title="product">
                                                                <img src="image/catalog/demo/product/index2/270/4.jpg" alt="Benderloin officia" class="img-responsive">
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
                                                        <h4><a href="#" target="_self" title="Benderloin officia">Benderloin officia</a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>


                                                        <p class="price">$80.00
                                                        </p>
                                                        <div class="button-group">
                                                            <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                            </button>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                            </button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">

                                                            <a href="#" target="_self" title="product">
                                                                <img src="image/catalog/demo/product/index2/270/5.jpg" alt="Rumstick shankle" class="img-responsive">
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
                                                        <h4><a href="#" target="_self" title="Rumstick shankle">Rumstick shankle</a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <p class="price"> $132.00</p>
                                                        <div class="button-group">
                                                            <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                            </button>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                            </button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="so-categories custom-slidercates module clearfix">
                <h3 class="modtitle"><span>Top collections</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Smartphone" target="_self">
                                    <img src="image/catalog/demo/category/id4-cat1.jpg" title="Smartphone" alt="Smartphone" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Smartphone " target="_self"> Smartphone</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Fashion" target="_self">
                                    <img src="image/catalog/demo/category/id4-cat2.jpg" title="Fashion" alt="Fashion" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Fashion" target="_self"> Fashion</a>
                            </div>
                        </div>

                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Sport bikes " target="_self">
                                    <img src="image/catalog/demo/category/id4-cat3.jpg" title="Sport bikes " alt="Sport bikes " />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Sport bikes " target="_self"> Sport bikes </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Furniture & Decor" target="_self">
                                    <img src="image/catalog/demo/category/id4-cat4.jpg" title="Furniture & Decor" alt="Furniture & Decor" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Furniture & Decor " target="_self"> Furniture & Decor</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Appliances" target="_self">
                                    <img src="image/catalog/demo/category/id4-cat5.jpg" title="Appliances" alt="Appliances" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Appliances" target="_self">Appliances</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Sine engain" target="_self">
                                    <img src="image/catalog/demo/category/id4-cat3.jpg" title="Sine engain" alt="Sine engain" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Sine engain " target="_self"> Smartphone</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="module so-extraslider-ltr extra-layout4 cus1">
                <div class="form-group col-pre">
                     <div class="m-head">The best of smartphone<a href="#">View All</a></div>
                </div>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label label-sale">-13%</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/6.jpg" alt="Ground round enim" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/7.jpg" alt="Mapicola incididuv " class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Mapicola incididuv">Mapicola incididuv </a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/8.jpg" alt="Corem ipsum dolor" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Corem ipsum dolor">Corem ipsum dolor</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">  $65
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/9.jpg" alt="Benderloin officia" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Benderloin officia">Benderloin officia</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">$80.00
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/10.jpg" alt="Rumstick shankle" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Rumstick shankle">Rumstick shankle</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <p class="price"> $132.00</p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/1.jpg" alt="Mapicola incididuv " class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Mapicola incididuv">Mapicola incididuv </a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/2.jpg" alt="Corem ipsum dolor" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Corem ipsum dolor">Corem ipsum dolor</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">  $65
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/3.jpg" alt="Benderloin officia" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Benderloin officia">Benderloin officia</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">$80.00
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="module so-extraslider-ltr extra-layout4 cus2">
                <div class="form-group col-pre">
                     <div class="m-head">Fashion & Jewelry<a href="#">View All</a></div>
                </div>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label label-sale">-13%</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/4.jpg" alt="Ground round enim" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/5.jpg" alt="Mapicola incididuv " class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Mapicola incididuv">Mapicola incididuv </a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/6.jpg" alt="Corem ipsum dolor" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Corem ipsum dolor">Corem ipsum dolor</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">  $65
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/7.jpg" alt="Benderloin officia" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Benderloin officia">Benderloin officia</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">$80.00
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/8.jpg" alt="Rumstick shankle" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Rumstick shankle">Rumstick shankle</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <p class="price"> $132.00</p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/9.jpg" alt="Mapicola incididuv " class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Mapicola incididuv">Mapicola incididuv </a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">   <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">

                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/10.jpg" alt="Corem ipsum dolor" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Corem ipsum dolor">Corem ipsum dolor</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">  $65
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="image/catalog/demo/product/index2/270/1.jpg" alt="Benderloin officia" class="img-responsive">
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
                                                <h4><a href="#" target="_self" title="Benderloin officia">Benderloin officia</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>


                                                <p class="price">$80.00
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="module so-latest-blog blog-home">
                <h3 class="modtitle"><span>Our Latest Blogs</span></h3>
                <div class="modcontent clearfix">
                    <div class="so-blog-external">
                        <div class="yt-content-slider blog-external" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes" data-buttonpage="top">

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/6.jpg" alt="Biten demons lector in henderit in vulp" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Biten demons lector in henderit in vulp" target="_self">Biten demons lector in henderit in vulp</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>4</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/4.jpg" alt="Lorem ipsum dolor sit amet, consetetur sadipscing elitr" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Lorem ipsum dolor sit amet, consetetur sadipscing elitr" target="_self">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>5</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/5.jpg" alt="Stet clita kasd gubergren no sea takimata sanctus est" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Stet clita kasd gubergren no sea takimata sanctus est" target="_self">Stet clita kasd gubergren no sea takimata sanctus est</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>14</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/3.jpg" alt="Ut wisi enim ad minim veniam quis nostrud exerci tation" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Ut wisi enim ad minim veniam quis nostrud exerci tation" target="_self">Ut wisi enim ad minim veniam quis nostrud exerci tation</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>24</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/2.jpg" alt="Duis autem vel eum iriure dolor in hendrerit in vulputate" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Duis autem vel eum iriure dolor in hendrerit in vulputate" target="_self">Duis autem vel eum iriure dolor in hendrerit in vulputate</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>25</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="image/catalog/blog/1.jpg" alt="Ut wisi enim ad minim veniam quis nostrud exerci tation" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">

                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Ut wisi enim ad minim veniam quis nostrud exerci tation" target="_self">Ut wisi enim ad minim veniam quis nostrud exerci tation</a>
                                            </h4>
                                            <div class="media-date-added idx4"><b>24</b> Dec</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slider-brands clearfix">
                <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="7" data-items_column1="6" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand1.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand2.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand3.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand4.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand5.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand6.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand7.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand8.jpg" alt="brand"></a>
                     </div>
                     <div class="item">
                     <a href="#"><img src="image/catalog/brands/id4-brand5.jpg" alt="brand"></a>
                     </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection
