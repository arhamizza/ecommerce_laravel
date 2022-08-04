<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function pro()
    {
        $item = Provinces::get()->toArray();
        // return view('belanja', compact('item'));
        var_dump($item);
    }
}
