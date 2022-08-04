<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('atmin.kategori.index');
    }

    public function tambah()
    {
        return view('atmin.kategori.tambah');
    }
}
