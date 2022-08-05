<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

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
    public function insert(Request $request)
    {
        $kategori = new Kategori();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/uploads/kategori'.$filename);
            $kategori->image = $filename;
        }

        $kategori->nama = $request->input('nama');
        $kategori->slug = $request->input('slug');
        $kategori->description = $request->input('description');
        $kategori->status = $request->input('status') == TRUE ? '1':'0';
        $kategori->popular = $request->input('popular') == TRUE ? '1':'0';
        $kategori->meta_title = $request->input('meta_title');
        $kategori->meta_keywords = $request->input('meta_keywords');
        $kategori->meta_descrip = $request->input('meta_descrip');
        $kategori->save();
        return redirect('/dashboard')->width('status',"Kategori Berhasil Ditambahkan!");
    }
}
