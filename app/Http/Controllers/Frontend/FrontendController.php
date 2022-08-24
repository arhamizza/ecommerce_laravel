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
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')->get();
            return view('frontend.kategori.index', compact('kategori','produk','category'));
            
        } else {
            return redirect('/')->where('status',"Slug doesnot exists");
        }

    }

    public function productview($cate_slug, $prod_slug)
    {
        if (Kategori::where('slug', $cate_slug)->exists()) 
        {
            $kategori = Kategori::where('slug', $cate_slug)->first();
            $produk2 = Produk::where('cate_id', $kategori->id)->where('status', '1')->get();
            if (Produk::where('slug', $prod_slug)->exists()) 
            {
                $produk = Produk::where('slug', $prod_slug)->first();
                return view ('frontend.produk.view', compact('produk','kategori','produk2'));
                // var_dump($produk);
            }
            else {
                return redirect('/')->with('status',"The link was broken" );
            }
        } 
        else {
            return redirect('/')->with('status',"No Such category found" );
        }
    }
}