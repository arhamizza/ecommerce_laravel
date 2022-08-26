<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');
        $review = $request->input('review');

        $product_check = Produk::where('id', $product_id)->where('status', '1')->first();
        if ($product_check) {
            $verifed_purchase = Order::where('order.user_id', Auth::id())
                ->join('order_item', 'order_id', 'order_item.order_id')
                ->where('order_item.prod_id', $product_id)->get();
            if ($verifed_purchase->count()>0) {
                $existing_rating = Rating::where('user_id', Auth::id())->where('prod_id', $product_id)->first();
                if ($existing_rating) {
                    $existing_rating->stars_rated = $stars_rated;
                    $existing_rating->review = $request->input('review');
                    $existing_rating->update();
                } else {
                    Rating::Create([
                        'user_id'=>Auth::id(),
                        'prod_id'=>$product_id,
                        'stars_rated'=>$stars_rated,
                        'review'=>$review,
                    ]);
                }
                return redirect()->back()->with('status', "Terimakasih sudah memberi rating");
            } else {
                return redirect()->back()->with('status', "You canot rate this product without purchase");
            }
        } else {
            return redirect()->back()->with('status', "The Link you followed was broken");
        }
    }
}
