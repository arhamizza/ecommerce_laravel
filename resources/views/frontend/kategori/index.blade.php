@extends('layout.core2')
@section('title', 'Kategori')
@section('contents')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">{{$kategori->nama}}</a></li>
    </ul>

    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Categories</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach ($category as $kat)
                            <li class=""><a href="{{ url('view-category/' . $kat->slug) }}" class="cutom-parent">{{ $kat->nama }}</a> <span class="dcjq-icon"></span></li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </aside>
        <!--Left Part End -->

        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <h3 class="title-category ">{{$kategori->nama}}</h3>
                <div class="category-derc">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a href="#"><img src="{{ asset('atmin/assets/uploads/kategori/' . $kategori->image) }}" width="1370px" height="300px" alt="img cate"><br></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 col-xs-12 view-mode">

                            <div class="list-view">
                                <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                            </div>

                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                            <form action="{{url('view-category/' .$kategori->slug) }}">
                                <div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                    <select class="form-control" id="sorting" name="sorting" value="{{ request('sorting') }}">
                                        <option href="" selected="selected">Default</option>
                                        <option value="1">Name (Z - A)</option>
                                        <option value="2">Name (A - Z)</option>
                                        <option value="3">Price (High &gt; Low)</option>
                                        <option value="4">Price (Low &gt; High)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-limit">Show:</label>
                                    <select id="input-limit" class="form-control" wire:model="sorting" onchange="location = this.value; ">
                                        <option value="" selected="selected">15</option>
                                        <option value="">25</option>
                                        <option value="">50</option>
                                        <option value="">75</option>
                                        <option value="">100</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-default">Sort</button>
                                </div>
                            </form>
                        </div>

                        <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                    <li><a href="">&gt;|</a></li>
                                </ul>
                            </div> -->
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                @foreach ($produk as $prod)
                <div class="products-list row nopadding-xs so-filter-gird">

                    <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <a href="{{url('view-category/' .$kategori->slug. '/' .$prod->slug) }}" target="_self" title="{{ $prod->nama }}">
                                        <img src="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" class="img-1 img-responsive" alt="image">
                                        <img src="{{ asset('atmin/assets/uploads/produk/' . $prod->image) }}" class="img-2 img-responsive" alt="image">
                                    </a>
                                </div>
                                <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                <div class="button-group so-quickview cartinfo--left">
                                    <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                        <span>Add to cart </span>
                                    </button>
                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
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
                                    <div class="box-review form-group">

                                        <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"> Write a
                                            review</a>
                                    </div>
                                    <h4><a href="{{url('view-category/' .$kategori->slug. '/' .$prod->slug) }}" title="{{ $prod->nama }}" target="_self">{{ $prod->nama }}</a></h4>
                                    <div class="price"> <span class="price-new">Rp {{ number_format($prod->selling_price)}}</span>
                                        <span class="price-old">Rp {{ number_format($prod->original_price)}}</span>
                                    </div>
                                    <div class="description item-desc">
                                        <p>{{ $prod->small_description }} </p>
                                    </div>
                                    <div class="list-block">
                                        <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                        </button>
                                        <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">
                            <h4 class="m-20"> Halaman : {{ $produk->currentPage() }} <br /></h4>


                            @if(isset($produk))
                            @if($produk->currentPage() > 1)

                            <button type="button" data-toggle="tooltip" title="Previous" class="btn btn-default">
                                <a class="text-white bg-primary" href="{{ $produk->previousPageUrl() }}">Previous</a></button>

                            </button>
                            @endif

                            @if($produk->hasMorePages())

                            <button type="button" data-toggle="tooltip" title="Next" class="btn btn-default">
                                <a class="text-white " href="{{ $produk->nextPageUrl() }}">Next</a></button>

                            </button>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->

            </div>

        </div>


        <!--Middle Part End-->
    </div>
</div>
<!-- //Main Container -->
@endsection