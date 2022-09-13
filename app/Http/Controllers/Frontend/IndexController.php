<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        
        $top_produk = Produk::where(
            'trending', '1')
            ->where('qty','!=', '0')
            ->inRandomOrder()
            ->limit(5) // here is yours limit
            ->get();
        $featured_products = Produk::where('trending', '1')->where('qty','!=', '0')->take(15)->get();
        $products = Produk::where('trending', '0')->where('qty','!=', '0')->take(10)->get();
        $top_collection = Kategori::where('popular', '1')->take(7)->get();
        $more_cate = Kategori::where('status', '1')->take(20)->get();

        return view('index', compact('featured_products', 'top_collection','top_produk','products','more_cate'));
    }
}
