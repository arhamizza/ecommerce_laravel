<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist.wishlist', compact('wishlist'));
    }

    public function add(Request $request)
    {
        if (Auth::check())
        {
            $prod_id = $request->input('product_id');
            if (Produk::find($prod_id))
            {
                $wish = new Wishlist();
                $wish->prod_id = $prod_id;
                $wish->user_id = Auth::id();
                $wish->save();
                return response()->json(['status' => "Product ditambahkan ke Wish List!"]);
            }
            else {
                return response()->json(['status' => "Produk tidak ditemukan"]);
            }
        }
        else {
            return response()->json(['status' => "Login untuk melanjutkan"]);
        }
    }

    public function deleteitem(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $wish = Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $wish->delete();
                return response()->json(['status' => "Wishlist Berhasil Dihapus!"]);
            }
        }
        else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }
}
