<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
        return view('atmin.orders.view');
    }
}
