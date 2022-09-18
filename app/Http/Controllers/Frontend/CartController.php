<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Cart;

class CartController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check())
        {
            $prod_check = Produk::where('id',$product_id)->first();

            if ($prod_check)
            {
                if (Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->nama." sudah di keranjang!"]);
                }
                else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->nama." ditambahkan ke keranjang!"]);
                }

            }
        }
        else {
            return response()->json(['status' => "Login to Continue"]);
        }

    }

    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart.cart', compact('cartitems'));
    }

    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');

        if (Auth::check())
        {
            if (Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart->prod_qty = $product_qty;
                $cart->update();
                return response()->json(['status'=>"Quantity Updated!"]);
            }
        }
    }

    public function deleteproduct(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cartItem = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product Deleted!"]);
            }
        }
        else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function cartcount()
    {
        $cartcount = Cart::where('user_id', Auth::id())->count();
        return response()->json(['count'=>$cartcount]);
    }

}
