<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use League\Flysystem\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('atmin.produk.index', compact('products'));
    }

    public function add()
    {
        $kategori = Kategori::all();
        return view('atmin.produk.tambah',compact('kategori'));
    }
}
