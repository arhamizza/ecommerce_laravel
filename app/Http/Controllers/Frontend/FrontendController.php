<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $category = Kategori::where('status', '1')->get();
        return view('index', compact('category'));
    }

    public function viewcategory($slug)
    {

        if (Kategori::where('slug', $slug)->exists()) {
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')->get();
            return view('frontend.kategori.index', compact('kategori', 'produk'));
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }

    public function productview($cate_slug, $prod_slug)
    {
        if (Kategori::where('slug', $cate_slug)->exists()) {
            $kategori = Kategori::where('slug', $cate_slug)->first();
            $produk2 = Produk::where('cate_id', $kategori->id)->where('status', '1')->get();
            if (Produk::where('slug', $prod_slug)->exists()) {
                $produk = Produk::where('slug', $prod_slug)->first();
                $rating = Rating::where('prod_id', $produk->id)->get();
                $rating_sum = Rating::where('prod_id', $produk->id)->sum('stars_rated');;
                $user_rating = Rating::where('prod_id', $produk->id)->where('user_id', Auth::id())->first();
                if ($rating->count() > 0) {
                    $rating_value = $rating_sum / $rating->count();
                } else {
                    $rating_value = 0;
                }


                // var_dump($rating);
                return view('frontend.produk.view', compact('produk', 'kategori', 'produk2', 'rating', 'rating_value', 'user_rating'));
            } else {
                return redirect('/')->with('status', "The link was broken");
            }
        } else {
            return redirect('/')->with('status', "No Such category found");
        }
    }
    public function productlistAjax()
    {
        $produk = Produk::select('nama')->where('status','1')->get();
        $data = [];

        foreach ($produk as $item ) {
            $data[] = $item['nama'];
        }

        return $data;
    }

    public function searchProduct(Request $request)
    {
        $searched_product = $request->product_name;
        if ($searched_product != "") 
        {
            $produk = Produk::where("nama","LIKE","%$searched_product%")->first();
            if ($produk) 
            {
                return redirect("view-category/".$produk->kategori->slug. '/'.$produk->slug);
            }
            else 
            {
            return redirect()->back()->with("status","No products matched your search");
            }
        }
        else {
            return redirect()->back();
        }
    }

}
