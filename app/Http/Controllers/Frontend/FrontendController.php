<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_products = Produk::where('trending','1')->take(15)->get();
        $top_collection = Kategori::where('popular','1')->take(7)->get();
        return view('index', compact('featured_products','top_collection'));
    }
}
