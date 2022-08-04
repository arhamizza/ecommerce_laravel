<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('atmin.index');
    }
}
