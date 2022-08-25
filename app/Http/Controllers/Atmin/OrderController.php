<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class OrderController extends Controller
{ 
    public function index()
    {
        $orders = Order::where('status','0')->get();
        return view('atmin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('atmin.orders.view', compact('orders'));
    }

    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status',"Update Order Berhasil!");
    }

    public function orderhistory()
    {
        $orders = Order::where('status','1')->get();
        return view('atmin.orders.history', compact('orders'));
    }
}
