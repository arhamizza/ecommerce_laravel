<header id="header" class=" typeheader-4">
    <div class="banner-top hidden-compact">
        <div class="container">
            <div class="row text-center">
            </div>
        </div>
    </div>

    <!-- Header Top -->
    <div class="header-top hidden-compact">
        <div class="container">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-4 col-sm-6 col-xs-7">
                    <ul class="top-link list-inline lang-curr">
                    </ul>

                </div>
                <div class="header-top-right collapsed-block col-lg-6 col-md-8 col-sm-6 col-xs-5">
                    <ul class="top-link list-inline">
                        @guest
                        @if (Route::has('login'))
                        <li class="hidden-xs">
                            <a href="{{ route('login') }}">
                                <i class="fa fa-lock"></i>{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="hidden-xs">
                            <a href="{{ route('register') }}">
                                <i class="fa fa-lock"></i>{{ __('register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('my-orders')}}">Pembelian</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="wishlist hidden-sm hidden-xs">
                            <a href="{{ url('wishlist') }}" id="wishlist-total" class="top-link-wishlist"
                                        title="Wish List"> Wish List
                                <span class="badge badge-pill wishlist-count">0</span>

                            </a>
                        </li>

                        <li class="checkout hidden-sm hidden-xs"><a href="{{ url('checkout') }}" class="btn-link" title="Checkout "><span><i class="fa fa-check-square-o"></i>Checkout
                                </span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- //Header Top -->

    <!-- Header center -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo"><a href="/"><img src="image/catalog/logo4.png" title="Your Store" alt="Your Store" /></a></div>
                </div>
                <!-- //end Logo -->
                <!-- Search -->
                <div class="middle2 col-lg-7 col-md-6">
                    <div class="search-header-w">
                        <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i>
                        </div>
                        <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                            <form method="POST" action="{{ route('searchproduct') }}">
                                @csrf
                                <div id="search0" class="search input-group form-group">
                                    <div class="search-bar">
                                        <input class="form-control" id="search_product" type="search" value="" size="50" required placeholder="Search Products" name="product_name">
                                        <span class="input-group-btn">
                                            <button type="submit" class="button-search btn btn-primary"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- //end Search -->
                <div class="middle3 col-lg-3 col-md-3">
                    <!--cart-->
                    <div class="shopping_cart">
                        <div id="cart" class="btn-shopping-cart">

                            <a href={{ url('cart') }} data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="shopcart">
                                    <span class="icon-c">
                                        <i class="fa fa-shopping-bag"></i>
                                    </span>
                                    <div class="shopcart-inner">
                                        <p class="text-shopping-cart">
                                            My cart
                                        </p>

                                        <span class="total-shopping-cart cart-total-full">
                                            <span class="items_cart cart-count">0</span>
                                            <span class="items_cart2">
                                                item(s)</span><span class="items_carts"> - $162.00 </span>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                <li>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="product.html">
                                                        <img src="image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Yutculpa ullamco</a>
                                                </td>
                                                <td class="text-center">x1</td>
                                                <td class="text-center">$80.00</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="product.html">
                                                        <img src="image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Xancetta bresao</a>
                                                </td>
                                                <td class="text-center">x1</td>
                                                <td class="text-center">$60.00</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                    </td>
                                                    <td class="text-right">$140.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                    </td>
                                                    <td class="text-right">$2.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>VAT (20%)</strong>
                                                    </td>
                                                    <td class="text-right">$20.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Total</strong>
                                                    </td>
                                                    <td class="text-right">$162.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-right"> <a class="btn view-cart" href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i>Lihat
                                                Keranjang</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--//cart-->
                </div>
            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom hidden-compact">
        <div class="container">
            <div class="row">

                <div class="bottom1 menu-vertical col-lg-2 col-md-3">
                    <!-- Secondary menu -->
                    <div class="responsive so-megamenu  megamenu-style-dev">
                        <div class="so-vertical-menu ">
                            <nav class="navbar-default">

                                <div class="container-megamenu vertical">
                                    <div id="menuHeading">
                                        <div class="megamenuToogle-wrapper">
                                            <div class="megamenuToogle-pattern">
                                                <div class="container">
                                                    <div>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    All Categories
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-header">
                                        <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                            <i class="fa fa-bars"></i>
                                            <span> All Categories </span>

                                        </button>
                                    </div>
                                    <!-- @foreach ($category as $kat)
                                                    <li><a href="{{ url('view-category/' . $kat->slug) }}">{{ $kat->nama }}asdasdads</a></li>
                                                    @endforeach -->
                                    <div class="vertical-wrapper">
                                        <span id="remove-verticalmenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu">
                                                    @foreach ($category as $kat)
                                                    <li class="item-vertical  style1 ">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ url('view-category/' . $kat->slug) }}" class="clearfix">
                                                            <span class="label"></span>
                                                            <!-- ----- jika navbar pakai gambar ---------- -->
                                                            <!-- <img src="{{ asset('atmin/assets/uploads/kategori/' . $kat->image) }}" alt="img-thumbnail" width="20px"
                                                                        height="20px"> -->
                                                            <span>{{ $kat->nama }}<span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    <li class="loadmore">
                                                        <i class="fa fa-plus-square-o"></i>
                                                        <span class="more-view">More Categories</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- // end Secondary menu -->
                </div>
                <!-- Main menu -->
                <div class="main-menu col-lg-10 col-md-9">
                    <div class="responsive so-megamenu megamenu-style-dev">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal open ">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container-mega">
                                            <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                <li class="home hover">
                                                    <a href="/index">Home <b class="caret"></b></a>
                                                    <div class="sub-menu" style="width:100%;">
                                                        <div class="content">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a href="/index" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/home-1.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">Home page -
                                                                            (Default)</h3>
                                                                    </a>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="index2.php" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/home-2.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">Home page -
                                                                            Layout 2</h3>
                                                                    </a>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="index3.php" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/home-3.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">Home page -
                                                                            Layout 3</h3>
                                                                    </a>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="index4.php" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/home-4.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">Home page -
                                                                            Layout 4</h3>
                                                                    </a>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="html_width_RTL//index" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/rtl.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">RTL Layout</h3>
                                                                    </a>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="mobile/index.html" class="image-link">
                                                                        <span class="thumbnail">
                                                                            <img class="img-responsive img-border" src="image/catalog/menu/mobile.jpg" alt="">

                                                                        </span>
                                                                        <h3 class="figcaption">Mobile Layout
                                                                        </h3>
                                                                    </a>

                                                                </div>

                                                                <!-- <div class="col-md-15">
                                                                        <a href="#" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">

                                                                            </span>
                                                                            <h3 class="figcaption">Comming soon</h3>
                                                                        </a>

                                                                    </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Features</strong>
                                                        <img class="label-hot" src="image/catalog/menu/new-icon.png" alt="icon items">
                                                        <b class="caret"></b>
                                                    </a>
                                                    <div class="sub-menu" style="width: 100%; right: auto;">
                                                        <div class="content">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="column">
                                                                        <a href="#" class="title-submenu">Listing
                                                                            pages</a>
                                                                        <div>
                                                                            <ul class="row-list">
                                                                                <li><a href="category.html">Category
                                                                                        Page 1 </a></li>
                                                                                <li><a href="category-v2.html">Category
                                                                                        Page 2</a></li>
                                                                                <li><a href="category-v3.html">Category
                                                                                        Page 3</a></li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="column">
                                                                        <a href="#" class="title-submenu">Product
                                                                            pages</a>
                                                                        <div>
                                                                            <ul class="row-list">
                                                                                <li><a href="product.html">Product
                                                                                        page 1</a></li>
                                                                                <li><a href="product-v2.html">Product
                                                                                        page 2</a></li>
                                                                                <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="column">
                                                                        <a href="#" class="title-submenu">Shopping
                                                                            pages</a>
                                                                        <div>
                                                                            <ul class="row-list">
                                                                                <li><a href="cart.html">Shopping
                                                                                        Cart Page</a></li>
                                                                                <li><a href="checkout.html">Checkout
                                                                                        Page</a></li>
                                                                                <li><a href="compare.html">Compare
                                                                                        Page</a></li>
                                                                                <li><a href="wishlist.html">Wishlist
                                                                                        Page</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="column">
                                                                        <a href="#" class="title-submenu">My Account
                                                                            pages</a>
                                                                        <div>
                                                                            <ul class="row-list">
                                                                                <li><a href="login.html">Login
                                                                                        Page</a></li>
                                                                                <li><a href="register.html">Register
                                                                                        Page</a></li>
                                                                                <li><a href="my-account.html">My
                                                                                        Account</a></li>
                                                                                <li><a href="order-history.html">Order
                                                                                        History</a></li>
                                                                                <li><a href="order-information.html">Order
                                                                                        Information</a></li>
                                                                                <li><a href="return.html">Product
                                                                                        Returns</a></li>
                                                                                <li><a href="gift-voucher.html">Gift
                                                                                        Voucher</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Pages</strong>
                                                        <b class="caret"></b>
                                                    </a>
                                                    <div class="sub-menu" style="width: 40%; ">
                                                        <div class="content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <ul class="row-list">
                                                                        <li><a class="subcategory_item" href="faq.html">FAQ</a></li>

                                                                        <li><a class="subcategory_item" href="sitemap.html">Site
                                                                                Map</a></li>
                                                                        <li><a class="subcategory_item" href="contact.html">Contact
                                                                                us</a></li>
                                                                        <li><a class="subcategory_item" href="banner-effect.html">Banner
                                                                                Effect</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <ul class="row-list">
                                                                        <li><a class="subcategory_item" href="about-us.html">About Us
                                                                                1</a></li>
                                                                        <li><a class="subcategory_item" href="about-us-2.html">About Us
                                                                                2</a></li>
                                                                        <li><a class="subcategory_item" href="about-us-3.html">About Us
                                                                                3</a></li>
                                                                        <li><a class="subcategory_item" href="about-us-4.html">About Us
                                                                                4</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Categories</strong>
                                                        <img class="label-hot" src="image/catalog/menu/hot-icon.png" alt="icon items">

                                                        <b class="caret"></b>
                                                    </a>
                                                    <div class="sub-menu" style="width: 100%; display: none;">
                                                        <div class="content">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-md-3 img img1">
                                                                            <a href="#"><img src="image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img2">
                                                                            <a href="#"><img src="image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img3">
                                                                            <a href="#"><img src="image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img4">
                                                                            <a href="#"><img src="image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Automotive</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <li><a href="#" class="main-menu">Car
                                                                                            Alarms and
                                                                                            Security</a></li>
                                                                                    <li><a href="#" class="main-menu">Car
                                                                                            Audio &amp;
                                                                                            Speakers</a></li>
                                                                                    <li><a href="#" class="main-menu">Gadgets
                                                                                            &amp; Auto Parts</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">More
                                                                                            Car Accessories</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Funitures</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <li><a href="#" class="main-menu">Bathroom</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Bedroom</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Decor</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Living
                                                                                            room</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Jewelry &amp;
                                                                        Watches</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <li><a href="#" class="main-menu">Earings</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Wedding
                                                                                            Rings</a></li>
                                                                                    <li><a href="#" class="main-menu">Men
                                                                                            Watches</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Electronics</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <li><a href="#" class="main-menu">Computer</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Smartphone</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Tablets</a>
                                                                                    </li>
                                                                                    <li><a href="#" class="main-menu">Monitors</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Accessories</strong>

                                                    </a>

                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="blog-page.html" class="clearfix">
                                                        <strong>Blog</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->
            </div>
        </div>

    </div>

</header>
