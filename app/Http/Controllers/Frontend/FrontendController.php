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
        $featured_products = Produk::where('trending', '1')->take(15)->get();
        $top_collection = Kategori::where('popular', '1')->take(7)->get();
        return view('index', compact('featured_products', 'top_collection'));
    }

    public function category()
    {
        $category = Kategori::where('status', '0')->get();
        return view('index', compact('category'));
    }

    public function viewcategory($slug)
    {
        if (Kategori::where('slug', $slug)->exists()) {
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '0')->get();
            return view('frontend.produk.index', compact('kategori','produk'));
        } else {
            return redirect('/')->where('status',"Slug doesnot exists");
        }

    }
}
