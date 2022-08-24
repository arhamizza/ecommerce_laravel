<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('ico/favicon-16x16.png') }}" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/minicolors/miniColors.css') }}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-categories.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-newletter-popup.css') }}" rel="stylesheet">


    <link href="{{ asset('css/footer/footer4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header/header4.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('css/home4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">



    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

</head>

<body class="common-home res layout-4">

    <div id="wrapper" class="wrapper-fluid banners-effect-10 product_data">

        <!-- Header Container  -->
        <header id="header" class=" typeheader-4">
            <div class="banner-top hidden-compact">
                <div class="container">
                    <div class="row text-center">
                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                            We are using php file for implement our <strong>'Demo Options' </strong> tool in left of our
                            demo. in our package, there are no php files
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Top -->
            <div class="header-top hidden-compact">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left col-lg-6 col-md-4 col-sm-6 col-xs-7">
                            <ul class="top-link list-inline lang-curr">
                                <li class="currency">
                                    <div class="btn-group currencies-block">
                                        <form action="/index" method="post" enctype="multipart/form-data"
                                            id="currency">
                                            <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-credit "></span> $ US Dollar <span
                                                    class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu btn-xs">
                                                <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                <li> <a href="#">(£)&nbsp;Pounds </a></li>
                                                <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </li>
                                <li class="language">
                                    <div class="btn-group languages-block ">
                                        <form action="/index" method="post" enctype="multipart/form-data"
                                            id="bt-language">
                                            <a class="btn-link dropdown-toggle" data-toggle="dropdown">
                                                <img src="image/catalog/flags/gb.png" alt="English" title="English">
                                                <span class="">English</span>
                                                <span class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/index"><img class="image_flag"
                                                            src="image/catalog/flags/gb.png" alt="English"
                                                            title="English" /> English </a></li>
                                                <li> <a href="/index"> <img class="image_flag"
                                                            src="image/catalog/flags/ar.png" alt="Arabic"
                                                            title="Arabic" /> Arabic </a> </li>
                                            </ul>
                                        </form>
                                    </div>

                                </li>
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
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{url('my-orders')}}">Pembelian</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                <li class="wishlist hidden-sm hidden-xs"><a href="#" id="wishlist-total"
                                        class="top-link-wishlist" title="Wish List (0) ">
                                        <!-- <i class="fa fa-heart"></i> --> Wish List (0)
                                    </a>
                                </li>
                                <li class="checkout hidden-sm hidden-xs"><a href="{{ url('dashboard') }}"
                                        class="btn-link" title="Checkout "><span><i
                                                class="fa fa-check-square-o"></i>Checkout
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
                            <div class="logo"><a href="/"><img src="image/catalog/logo4.png"
                                        title="Your Store" alt="Your Store" /></a></div>
                        </div>
                        <!-- //end Logo -->
                        <!-- Search -->
                        <div class="middle2 col-lg-7 col-md-6">
                            <div class="search-header-w">
                                <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i>
                                </div>
                                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                    <form method="GET" action="/index">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                <select class="no-border" name="category_id">
                                                    <option value="0">All Categories</option>
                                                    <option value="78">Apparel</option>
                                                    <option value="77">Cables &amp; Connectors</option>
                                                    <option value="82">Cameras &amp; Photo</option>
                                                    <option value="80">Flashlights &amp; Lamps</option>
                                                    <option value="81">Mobile Accessories</option>
                                                    <option value="79">Video Games</option>
                                                    <option value="20">Jewelry &amp; Watches</option>
                                                    <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings
                                                    </option>
                                                    <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding
                                                        Rings</option>
                                                    <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men
                                                        Watches</option>
                                                </select>
                                            </div>

                                            <input class="autosearch-input form-control" type="text"
                                                value="" size="50" autocomplete="off"
                                                placeholder="Keyword here..." name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary"
                                                    name="submit_search"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- //end Search -->
                        <div class="middle3 col-lg-3 col-md-3">
                            <!--cart-->
                            <div class="shopping_cart">
                                <div id="cart" class="btn-shopping-cart">

                                    <a href={{ url('cart') }} data-loading-text="Loading... "
                                        class="btn-group top_cart dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="true">
                                        <div class="shopcart">
                                            <span class="icon-c">
                                                <i class="fa fa-shopping-bag"></i>
                                            </span>
                                            <div class="shopcart-inner">
                                                <p class="text-shopping-cart">
                                                    My cart
                                                </p>

                                                <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart">02</span><span class="items_cart2">
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
                                                                <img src="image/catalog/demo/product/80/1.jpg"
                                                                    style="width:70px" alt="Yutculpa ullamcon"
                                                                    title="Yutculpa ullamco" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="product.html">Yutculpa ullamco</a>
                                                        </td>
                                                        <td class="text-center">x1</td>
                                                        <td class="text-center">$80.00</td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('2');"
                                                                class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html">
                                                                <img src="image/catalog/demo/product/80/2.jpg"
                                                                    style="width:70px" alt="Xancetta bresao"
                                                                    title="Xancetta bresao" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="product.html">Xancetta bresao</a>
                                                        </td>
                                                        <td class="text-center">x1</td>
                                                        <td class="text-center">$60.00</td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('1');"
                                                                class="fa fa-times fa-delete"></a>
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
                                                <p class="text-right"> <a class="btn view-cart"
                                                        href="{{ url('cart') }}"><i
                                                            class="fa fa-shopping-cart"></i>Lihat
                                                        Keranjang</a>&nbsp;&nbsp;&nbsp; <a
                                                        class="btn btn-mega checkout-cart" href="checkout.html"><i
                                                            class="fa fa-share"></i>Checkout</a>
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
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                                    class="navbar-toggle">
                                                    <i class="fa fa-bars"></i>
                                                    <span> All Categories </span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper">
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">
                                                        <ul class="megamenu">
                                                            <li class="item-vertical  with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico10.png"
                                                                        alt="icon">
                                                                    <span>Gifts & Toys</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Apparel</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for
                                                                                                                Tablet
                                                                                                                PC</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for i
                                                                                                                Pad</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for
                                                                                                                iPhone</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Bags,
                                                                                                                Holiday
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Alarms
                                                                                                                and
                                                                                                                Security</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Cables
                                                                                                        &amp;
                                                                                                        Connectors</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Cameras
                                                                                                                &amp;
                                                                                                                Photo</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Electronics</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Outdoor
                                                                                                                &amp;
                                                                                                                Traveling</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Camping
                                                                                                        &amp; Hiking</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Shaving
                                                                                                                &amp;
                                                                                                                Hair
                                                                                                                Removal</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Salon
                                                                                                                &amp;
                                                                                                                Spa
                                                                                                                Equipment</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Smartphone
                                                                                                        &amp;
                                                                                                        Tablets</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Sports
                                                                                                                &amp;
                                                                                                                Outdoors</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Bags,
                                                                                                        Holiday
                                                                                                        Supplies</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_46';">Battereries
                                                                                                                &amp;
                                                                                                                Chargers</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '24_64';">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_45';">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_30';">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                    </ul>
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
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    <img src="image/catalog/menu/icons/ico1.png"
                                                                        alt="icon">
                                                                    <span>Fashion & Accessories</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical  style1 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span class="label"></span>
                                                                    <img src="image/catalog/menu/icons/ico9.png"
                                                                        alt="icon">
                                                                    <span>Electronic</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="40">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Smartphone</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Esdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Apple</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Dell</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Asdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Diam
                                                                                                                sit</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Labore
                                                                                                                et</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Monitors</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row banner">
                                                                                    <a href="#">
                                                                                        <img src="image/catalog/menu/megabanner/vbanner1.jpg"
                                                                                            alt="banner1">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico7.png"
                                                                        alt="icon">
                                                                    <span>Health &amp; Beauty</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Car
                                                                                                        Alarms and
                                                                                                        Security</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="24"
                                                                                                        onclick="window.location = '24';"
                                                                                                        class="main-menu">Health
                                                                                                        &amp; Beauty</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Helicopters
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Outdoor
                                                                                                                &amp;
                                                                                                                Traveling</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Toys
                                                                                                                &amp;
                                                                                                                Hobbies</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Salon
                                                                                                                &amp;
                                                                                                                Spa
                                                                                                                Equipment</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Shaving
                                                                                                                &amp;
                                                                                                                Hair
                                                                                                                Removal</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Smartphone
                                                                                                                &amp;
                                                                                                                Tablets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Sports
                                                                                                        &amp;
                                                                                                        Outdoors</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Flashlights
                                                                                                                &amp;
                                                                                                                Lamps</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fragrances</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fishing</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">FPV
                                                                                                                System
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">More
                                                                                                        Car
                                                                                                        Accessories</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Lighter
                                                                                                                &amp;
                                                                                                                Cigar
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Mp3
                                                                                                                Players
                                                                                                                &amp;
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Men
                                                                                                                Watches</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Mobile
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Gadgets
                                                                                                        &amp; Auto
                                                                                                        Parts</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                &amp;
                                                                                                                Lifestyle
                                                                                                                Gadgets</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Man</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                    </ul>
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
                                                            <li class="item-vertical css-menu with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    <img src="image/catalog/menu/icons/ico6.png"
                                                                        alt="icon">
                                                                    <span>Smartphone &amp; Tablets</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="20">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Headphones,
                                                                                                        Headsets</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Home
                                                                                                        Audio</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Health
                                                                                                        &amp; Beauty</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
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
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico5.png"
                                                                        alt="icon">
                                                                    <span>Health & Beauty</span>

                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico4.png"
                                                                        alt="icon">
                                                                    <span>Bathroom</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico3.png"
                                                                        alt="icon">
                                                                    <span>Metallurgy</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico2.png"
                                                                        alt="icon">
                                                                    <span>Bedroom</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>

                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico1.png"
                                                                        alt="icon">
                                                                    <span>Health &amp; Beauty</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico11.png"
                                                                        alt="icon">
                                                                    <span>Toys &amp; Hobbies </span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico12.png"
                                                                        alt="icon">
                                                                    <span>Jewelry &amp; Watches</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico9.png"
                                                                        alt="icon">
                                                                    <span>Home &amp; Lights</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico6.png"
                                                                        alt="icon">
                                                                    <span>Metallurgy</span>
                                                                </a>
                                                            </li>
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
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="/index">Home <b class="caret"></b></a>
                                                            <div class="sub-menu" style="width:100%;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <a href="/index" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/home-1.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    (Default)</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="index2.php" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/home-2.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 2</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="index3.php" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/home-3.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 3</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="index4.php" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/home-4.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 4</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="html_width_RTL//index"
                                                                                class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/rtl.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">RTL Layout</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="mobile/index.html"
                                                                                class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="image/catalog/menu/mobile.jpg"
                                                                                        alt="">

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
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/new-icon.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Listing
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
                                                                                <a href="#"
                                                                                    class="title-submenu">Product
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
                                                                                <a href="#"
                                                                                    class="title-submenu">Shopping
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
                                                                                <a href="#"
                                                                                    class="title-submenu">My Account
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.html">Login
                                                                                                Page</a></li>
                                                                                        <li><a href="register.html">Register
                                                                                                Page</a></li>
                                                                                        <li><a href="my-account.html">My
                                                                                                Account</a></li>
                                                                                        <li><a
                                                                                                href="order-history.html">Order
                                                                                                History</a></li>
                                                                                        <li><a
                                                                                                href="order-information.html">Order
                                                                                                Information</a></li>
                                                                                        <li><a href="return.html">Product
                                                                                                Returns</a></li>
                                                                                        <li><a
                                                                                                href="gift-voucher.html">Gift
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
                                                                                <li><a class="subcategory_item"
                                                                                        href="faq.html">FAQ</a></li>

                                                                                <li><a class="subcategory_item"
                                                                                        href="sitemap.html">Site
                                                                                        Map</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="contact.html">Contact
                                                                                        us</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="banner-effect.html">Banner
                                                                                        Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us.html">About Us
                                                                                        1</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-2.html">About Us
                                                                                        2</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-3.html">About Us
                                                                                        3</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-4.html">About Us
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
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/hot-icon.png"
                                                                    alt="icon items">

                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img
                                                                                            src="image/catalog/menu/megabanner/image-1.jpg"
                                                                                            alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img
                                                                                            src="image/catalog/menu/megabanner/image-2.jpg"
                                                                                            alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img
                                                                                            src="image/catalog/menu/megabanner/image-3.jpg"
                                                                                            alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img
                                                                                            src="image/catalog/menu/megabanner/image-4.jpg"
                                                                                            alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Automotive</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Alarms and
                                                                                                    Security</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Audio &amp;
                                                                                                    Speakers</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gadgets
                                                                                                    &amp; Auto Parts</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">More
                                                                                                    Car Accessories</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Funitures</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Bathroom</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Bedroom</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Decor</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Living
                                                                                                    room</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Jewelry &amp;
                                                                                Watches</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Earings</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Wedding
                                                                                                    Rings</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Men
                                                                                                    Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Electronics</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Computer</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Smartphone</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Tablets</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Monitors</a>
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
        <!-- //Header Container  -->

        @yield('contents')
        <!-- Main Container  -->

        <!-- //Main Container -->


        <!-- Footer Container -->
        <br>
        <footer class="footer-container typefooter-4">
            <!-- Footer Top Container -->
            <section class="footer-top">
                <div class="container">
                    <div class="module newsletter-footer4">
                        <div class="newsletter" style="width:100%; background-color: #fff; ">
                            <div class="title-block">
                                <div class="page-heading font-title">Sign up for newsletter & get 30% off</div>
                                <div class="promotext">Trade Alert - Delivering the latest product trends and industry
                                    news straight to your inbox.</div>
                            </div>

                            <div class="block_content">
                                <form method="post" id="signup" name="signup"
                                    class="form-group form-inline signup send-mail">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" placeholder="Your email address..." value=""
                                                class="form-control" id="txtemail" name="txtemail" size="55">
                                        </div>
                                        <div class="subcribe">
                                            <button class="btn btn-primary btn-default font-title" type="submit"
                                                onclick="return subscribe_newsletter();" name="submit">
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <!--/.modcontent-->

                        </div>

                    </div>
                </div>
            </section>
            <!-- /Footer Top Container -->



            <section class="footer-middle ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_4202  col-style">
                            <div class="infos-footer box-footer">
                                <div class="module">
                                    <h3 class="modtitle">Contact Info</h3>
                                    <ul>
                                        <li class="adres"><i class="fa fa-map-marker">1</i>Address : 123 Suspendis
                                            mattis, Sollicit District,
                                            <br>NY Accums Fringilla
                                        </li>
                                        <li class="mail"><i class="fa fa-envelope">2</i>Email : support@domain.com
                                        </li>
                                        <li class="phone"><i class="fa fa-mobile">3</i>Hotline 1 : 0123-456-78910
                                            <br>Hotline 2: 0987-765-43210
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_bko7  col-style">
                            <div class="box-account box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">My Account</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Brands</a>
                                            </li>
                                            <li><a href="#">Gift Certificates</a>
                                            </li>
                                            <li><a href="#">Affiliates</a>
                                            </li>
                                            <li><a href="#">Specials</a>
                                            </li>
                                            <li><a href="#">FAQs</a>
                                            </li>
                                            <li><a href="#">Custom Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_6urb  col-style">
                            <div class="box-information box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Information</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a>
                                            </li>
                                            <li><a href="#">FAQ</a>
                                            </li>
                                            <li><a href="#">Warranty And Services</a>
                                            </li>
                                            <li><a href="#">Support 24/7 page</a>
                                            </li>
                                            <li><a href="#">Product Registration</a>
                                            </li>
                                            <li><a href="#">Product Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_3d8g  col-style">
                            <div class="box-service box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Services</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Contact Us</a>
                                            </li>
                                            <li><a href="#">Returns</a>
                                            </li>
                                            <li><a href="#">Support</a>
                                            </li>
                                            <li><a href="#">Site Map</a>
                                            </li>
                                            <li><a href="#">Customer Service</a>
                                            </li>
                                            <li><a href="#">Custom Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row middle2 ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-style">
                            <div class="app-store module">
                                <h3 class="modtitle">Download APP:</h3>
                                <ul>
                                    <li>
                                        <a title="App Store" href="#">
                                            <img src="image/catalog/demo/payment/app-1.png" alt="App Store">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="App Store" href="#">
                                            <img src="image/catalog/demo/payment/app-2.png" alt="App Store">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="socials-w module">
                                <h3 class="modtitle">Follow Us:</h3>
                                <ul class="socials">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech"
                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons"
                                            target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google_plus"><a class="_blank"
                                            href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i
                                                class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank"
                                            href="https://www.pinterest.com/smartaddons/" target="_blank"><i
                                                class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="youtube"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="categories-footer">
                        <ul>
                            <li> <a href="#" title="Tom Lee">Tom Lee</a> | <a href="#"
                                    title="Honda SH">Honda SH</a> | <a href="#" title="Durex">Durex</a> | <a
                                    href="#" title="Apple Pen">Apple Pen</a> | <a href="#"
                                    title="Jacket Men">Jacket Men</a> | <a href="#" title="Kotex Style">Kotex
                                    Style</a> | <a href="#" title="LG TV">LG TV</a> | <a href="#"
                                    title="Dolce Gabbana">Dolce Gabbana</a> | <a href="#"
                                    title="Onida TV">Onida TV</a> | <a href="#" title="Toshiba TV">Toshiba
                                    TV</a> | <a href="#" title="Philips TV">Philips TV</a> | <a href="#"
                                    title="Micromax TV">Micromax TV</a> | <a href="#" title="LED TV">LED TV</a>
                                | <a href="#" title="LCD TV">LCD TV</a> | <a href="#"
                                    title="Plasma TV">Plasma TV</a> | <a href="#" title="3D TV">3D TV</a> | <a
                                    href="#" title="Smart TV">Smart TV</a>
                            </li>
                            <li> <a href="#" title="Samsung Mobile">Samsung Mobile</a> | <a href="#"
                                    title="Asus Zenphone">Asus Zenphone</a> | <a href="#"
                                    title="Sony Camera">Sony Camera</a> | <a href="#" title="Jacket Men">Jacket
                                    Men</a> | <a href="#" title="Point shoot camera">Point shoot camera</a> | <a
                                    href="#" title="Camera Lens">Camera Lens</a> | <a href="#"
                                    title="Camera Tripod">Camera Tripod</a> | <a href="#"
                                    title="Camera Bag">Camera Bag</a> | <a href="#" title="Apple Laptop">Apple
                                    Laptop</a> | <a href="#" title="Acer Laptop">Acer Laptop</a> | <a
                                    href="#" title="Samsung Laptop">Samsung Laptop</a> | <a href="#"
                                    title="Lenovo Tablet">Lenovo Tablet</a> | <a href="#"
                                    title="Sony Laptop">Sony Laptop</a> | <a href="#"
                                    title="Accessories">Accessories</a> | <a href="#" title="Asus Laptop">Asus
                                    Laptop</a>
                            </li>
                            <li> <a href="#" title="Ipad">Ipad</a> | <a href="#" title="LG Tablet">LG
                                    Tablet</a> | <a href="#" title="Accessories">Accessories</a> | <a
                                    href="#" title="Notebook">Notebook</a> | <a href="#"
                                    title="Sony TV">Sony TV</a> | <a href="#" title="Hat">Hat</a> | <a
                                    href="#" title="LG TV">LG TV</a> | <a href="#"
                                    title="Panasonic TV">Panasonic TV</a> | <a href="#" title="Onida TV">Onida
                                    TV</a> | <a href="#" title="Tommy Hilfiger">Tommy Hilfiger</a> | <a
                                    href="#" title="Xiaomi">Xiaomi</a> | <a href="#"
                                    title="Dresses">Dresses</a> | <a href="#" title="Nokia 7610">Nokia 7610</a>
                                | <a href="#" title="Honda SH">Honda SH</a> | <a href="#"
                                    title="Kotex">Kotex</a> | <a href="#" title="3D TV">3D TV</a> | <a
                                    href="#" title="Durex">Durex</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Footer Bottom Container -->
            <section class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w">
                            <div class="copyright">eMarket © 2018 Demo Store. All Rights Reserved. Designed by <a
                                    href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w">
                            <img src="image/catalog/demo/payment/payment-4.png" alt="imgpayment">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Bottom Container -->


            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container -->

    </div>


    <!-- Cpanel Block -->

    <!-- Begin Color Scheme
============================================ -->
    <?php
    require_once 'scssphp/scss.inc.php';
    use Leafo\ScssPhp\Compiler;
    use Leafo\ScssPhp\Server;
    $themeCssName = '';

    if (isset($_COOKIE['customColorScheme'])) {
        $ColorScheme = $_COOKIE['customColorScheme'];

        $themeCssName = 'theme-' . str_replace('#', '', $ColorScheme) . '.css';
        if (isset($_POST['submitbtn'])) {
            $themeColor = strtolower($ColorScheme);
            $scss = new Compiler();
            $scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
            $scss->addImportPath('sass');
            $scss->setVariables([
                '$linkColor' => $themeColor,
                '$dir' => 'ltr',
            ]);

            $string_css = $scss->compile('@import "home4.scss"');
            file_put_contents('css/' . $themeCssName, $string_css);
        }
    }

    if (isset($_POST['submit-reset'])) {
        clear_css_cache('css');
        unset($_POST);
    }

    function clear_css_cache($type)
    {
        $files = glob('css/theme-*.' . $type);
        if ($files) {
            foreach ($files as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }
    }
    ?>
    <link rel='stylesheet' property='stylesheet' href='css/themecss/cpanel.css' type='text/css'
        media='all' />
    <?php if(isset($ColorScheme)){?>
    <link rel='stylesheet' property='stylesheet' href='css/<?php echo $themeCssName; ?>' type='text/css'
        media='all' />
    <?php }?>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4>
                </div>
                <div class="modal-body">
                    <textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ? $themeCssName : 'theme.css';
                    echo '/********************************************
                                                                                ';
                    echo '*  Color Scheme: ' . $fileCssName;
                    echo '
                                                                                ********************************************/
                                                                                ';
                    echo file_get_contents('css/' . $fileCssName);
                    ?>
            </textarea>
                </div>


            </div>
        </div>
    </div>
    <!-- End Color Scheme
============================================ -->




    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/minicolors/jquery.miniColors.min.js') }}"></script>

    <!-- Theme files
============================================ -->

    <script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/themejs/homepage.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/themejs/toppanel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/cpanel.js') }}"></script>

    <!-- Theme files
 ============================================ -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Berhasil!", "{{ session('status') }}", "success");
        </script>
    @endif
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>

    <script type="text/javascript">
        <!--
        // Check if Cookie exists
        if ($.cookie('display')) {
            view = $.cookie('display');
        } else {
            view = 'grid';
        }
        if (view) display(view);
        //
        -->
    </script>

    <script>
        $('.addToCartBtn').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "POST",
                url: "/add-to-cart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty,
                },
                success: function(response) {
                    swal(response.status);
                }
            });

        });

        $(document).ready(function() {

            $('.increment-btn').click(function(e) {
                e.preventDefault();

                var inc_value = $(this).closest('.product_data').find('.qty-input').val();
                // var inc_value = $('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    // $('.qty-input').val(value);
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });

            $('.decrement-btn').click(function(e) {
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // var dec_value = $('.qty-input').val();
                var dec_value = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    // $('.qty-input').val(value);
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });

            $('.delete-cart-item').click(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                $.ajax({
                    type: "POST",
                    url: "delete-cart-item",
                    data: {
                        'prod_id': prod_id,
                    },
                    success: function(response) {
                        setTimeout(() => window.location.reload(), 1000);
                        // window.location.reload();
                        swal("Berhasil!", response.status, "success");
                    }
                });
            });

            $('.changeQuantity').click(function(e) {
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                var qty = $(this).closest('.product_data').find('.qty-input').val();
                data = {
                    'prod_id': prod_id,
                    'prod_qty': qty,
                }

                $.ajax({
                    type: "POST",
                    url: "update-cart",
                    data: data,
                    success: function(response) {
                        setTimeout(() => window.location.reload(), 1000);
                        swal("Berhasil!", response.status, "success");
                    }
                });
            });
        });

        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: "POST",
                    url: "getkabupaten",
                    data: {'id_provinsi' : id_provinsi},
                    cache : false,
                    success: function (msg) {
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error: function (data) {
                        console.log('error:',data)
                      },
                });
            })

            $('#kabupaten').on('change', function(){
                let id_kabupaten = $('#kabupaten').val();

                $.ajax({
                    type: "POST",
                    url: "getkecamatan",
                    data: {'id_kabupaten' : id_kabupaten},
                    cache : false,
                    success: function (msg) {
                        $('#kecamatan').html(msg);
                        $('#desa').html('');

                    },
                    error: function (data) {
                        console.log('error:',data)
                      },
                });
            })

            $('#kecamatan').on('change', function(){
                let id_kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: "POST",
                    url: "getdesa",
                    data: {'id_kecamatan' : id_kecamatan},
                    cache : false,
                    success: function (msg) {
                        $('#desa').html(msg);

                    },
                    error: function (data) {
                        console.log('error:',data)
                      },
                });
            })

        })

    </script>
</body>

</html>
