<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Rating;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public $sorting;
    public $pagesize = 3;
    public function index()
    {

        $top_produk = Produk::where(
            'trending',
            '1'
        )
            ->where('qty', '!=', '0')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->inRandomOrder()
            ->limit(5) // here is yours limit
            ->get();
        $featured_products = Produk::where('trending', '1')->where('qty', '!=', '0')->take(15)->get();
        $products = Produk::where('trending', '0')->where('qty', '!=', '0')->take(10)->get();
        $top_collection = Kategori::where('popular', '1')->take(7)->get();
        $more_cate = Kategori::where('status', '1')->take(20)->get();


        return view('index', compact('featured_products', 'top_collection', 'top_produk', 'products', 'more_cate'));
    }

    public function category()
    {

        $category = Kategori::where('status', '1')->get();
        return view('index', compact('category'));
    }


    public function viewcategory($slug)
    {

        if (Kategori::where('slug', $slug)->exists()) {
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();


            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')->paginate(4);
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }

    public function productview($cate_slug, $prod_slug)
    {
        $category = Kategori::where('status', '1')->get();

        if (Kategori::where('slug', $cate_slug)->exists()) {
            $kategori = Kategori::where('slug', $cate_slug)->first();
            $produk2 = Produk::where('cate_id', $kategori->id)->where('status', '1')->Paginate(5);
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



                return view('frontend.produk.view', compact('produk', 'kategori', 'produk2', 'rating', 'rating_value', 'user_rating', 'category'));
            } else {
                return redirect('/')->with('status', "The link was broken");
            }
        } else {
            return redirect('/')->with('status', "No Such category found");
        }
    }
    public function productlistAjax()
    {
        $produk = Produk::select('nama')->where('status', '1')->get();
        $data = [];

        foreach ($produk as $item) {
            $data[] = $item['nama'];
        }

        return $data;
    }

    public function searchProduct(Request $request)
    {
        $searched_product = $request->product_name;
        if ($searched_product != "") {
            $produk = Produk::where("nama", "LIKE", "%$searched_product%")->first();
            if ($produk) {
                return redirect("view-category/" . $produk->kategori->slug . '/' . $produk->slug);
            } else {
                return redirect()->back()->with("status", "No products matched your search");
            }
        } else {
            return redirect()->back();
        }
    }
    public function lowName($slug)
    {
        if (Kategori::where('slug', $slug)->exists()) {
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')
                ->orderBy('nama', 'ASC')
                ->paginate(4);
            return view('frontend.kategori.index', compact('kategori', 'produk', 'category', 'produk'));
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }

    public function highName($slug)
    {
        if (Kategori::where('slug', $slug)->exists()) {
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')
                ->orderBy('nama', 'DESC')
                ->paginate(4);
            return view('frontend.kategori.index', compact('kategori', 'produk', 'category', 'produk'));
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }
    public function lowPrice($slug)
    {
        if (Kategori::where('slug', $slug)->exists()) {
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')
                ->orderBy('selling_price', 'ASC')
                ->paginate(4);
            return view('frontend.kategori.index', compact('kategori', 'produk', 'category', 'produk'));
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }
    public function highPrice($slug)
    {
        if (Kategori::where('slug', $slug)->exists()) {
            $category = Kategori::where('status', '1')->get();
            $kategori = Kategori::where('slug', $slug)->first();
            $produk = Produk::where('cate_id', $kategori->id)->where('status', '1')
                ->orderBy('selling_price', 'DESC')
                ->paginate(4);
            return view('frontend.kategori.index', compact('kategori', 'produk', 'category', 'produk'));
        } else {
            return redirect('/')->where('status', "Slug doesnot exists");
        }
    }
}
