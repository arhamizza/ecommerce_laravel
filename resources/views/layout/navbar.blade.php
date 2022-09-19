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
                                        <i class="fa fa-lock"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                                @if (Auth::user()->role_as == '2')
                        <li class="hidden-xs">
                            <a href="{{ url('/penjual') }}" class="hidden-xs">Halaman Penjual</a>
                        </li>

                        @elseif(Auth::user()->role_as == '1')
                        <li class="hidden-xs">
                            <a href="{{ url('/dashboard') }}" class="hidden-xs">Halaman Admin</a>
                        </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('my-orders') }}">Pembelian</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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

                        <li class="checkout hidden-sm hidden-xs"><a href="{{ url('checkout') }}" class="btn-link"
                                title="Checkout "><span><i class="fa fa-check-square-o"></i>Checkout
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
                    <div class="logo"><a href="/"><img src="{{ asset('image/catalog/logo4.png') }}"
                                title="Your Store" alt="Your Store" /></a></div>
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
                                        <input class="form-control" id="search_product" type="search" value=""
                                            size="50" required placeholder="Search Products" name="product_name">
                                        <span class="input-group-btn">
                                            <button type="submit" class="button-search btn btn-primary"><i
                                                    class="fa fa-search"></i></button>
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
                    <div class="shopping_cart ">
                        <div id="cart" class="btn-shopping-cart ">

                            <a href={{ url('cart') }} data-loading-text="Loading... "
                                class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
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
                                                item(s)</span>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu pull-right shoppingcart-box " role="menu">
                                <li class="c cartitems">
                                    <table class="table table-striped ">
                                        <tbody>
                                            @foreach ($cart as $item)
                                                <tr class="product_data ">
                                                    <td class="text-center" style="width:70px">
                                                        <a
                                                            href="{{ url('view-category/' . $item->products->kategori->slug . '/' . $item->products->slug) }}">
                                                            <img src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}"
                                                                style="width:100px" alt="{{ $item->products->nama }}"
                                                                title="{{ $item->products->nama }}" class="preview">
                                                        </a>
                                                    </td>
                                                    @if ($item->products->qty >= $item->prod_qty)
                                                        <input type="hidden" class="prod_id"
                                                            value="{{ $item->prod_id }}">
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="{{ url('view-category/' . $item->products->kategori->slug . '/' . $item->products->slug) }}">{{ $item->products->nama }}</a>
                                                        </td>
                                                    @else
                                                        <h6>Out of Stock</h6>
                                                    @endif
                                                    <td class="text-center">x{{ $item->prod_qty }}</td>
                                                    <td class="text-center">
                                                        {{ number_format($item->products->selling_price) }}</td>
                                                    <td class="text-right">
                                                        <a href="{{ url('view-category/' . $item->products->kategori->slug . '/' . $item->products->slug) }}"
                                                            class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('2');"
                                                            class="fa fa-times fa-delete delete-cart-item"></a>
                                                    </td>
                                                </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <p class="text-right"> <a class="btn view-cart"
                                                href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i>Lihat
                                                Keranjang</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart"
                                                href="{{ url('checkout') }}"><i class="fa fa-share"></i>Checkout</a>
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
                                                    @foreach ($category as $kat)
                                                        <li class="item-vertical  style1 ">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ url('view-category/' . $kat->slug) }}"
                                                                class="clearfix">
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
                                        <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{ url('/faq') }}" class="clearfix">
                                                        <strong>FAQ</strong>

                                                    </a>

                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{ url('my-orders') }}" class="clearfix">
                                                        <strong>Cek Order</strong>

                                                    </a>

                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{ url('profile') }}" class="clearfix">
                                                        <strong>Profile</strong>

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


