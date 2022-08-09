<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\File;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('atmin.kategori.index', compact('kategori'));
    }

    public function tambah()
    {
        return view('atmin.kategori.tambah');
    }
    public function insert(Request $request)
    {
        $kategori = new Kategori();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('atmin/assets/uploads/kategori', $filename);
            $kategori->image = $filename;
        }

        $kategori->nama = $request->input('nama');
        $kategori->slug = $request->input('slug');
        $kategori->description = $request->input('description');
        $kategori->status = $request->input('status') == TRUE ? '1' : '0';
        $kategori->popular = $request->input('popular') == TRUE ? '1' : '0';
        $kategori->meta_title = $request->input('meta_title');
        $kategori->meta_keyword = $request->input('meta_keyword');
        $kategori->meta_descrip = $request->input('meta_descrip');
        $kategori->save();
        return redirect('/dashboard')->with('status', "Kategori Berhasil Ditambahkan!");
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('atmin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'atmin/assets/uploads/kategori/'.$kategori->image;
            if (File::exists($path))
             {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('atmin/assets/uploads/kategori', $filename);
            $kategori->image = $filename;
        }
        $kategori->nama = $request->input('nama');
        $kategori->slug = $request->input('slug');
        $kategori->description = $request->input('description');
        $kategori->status = $request->input('status') == TRUE ? '1' : '0';
        $kategori->popular = $request->input('popular') == TRUE ? '1' : '0';
        $kategori->meta_title = $request->input('meta_title');
        $kategori->meta_keyword = $request->input('meta_keyword');
        $kategori->meta_descrip = $request->input('meta_descrip');
        $kategori->update();
        return redirect('kategori')->with('status',"Kategori telah di update!");
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori->image)
         {
            $path = 'atmin/assets/uploads/kategori/'.$kategori->image;
            if (File::exists($path))
             {
                File::delete($path);
            }
        }
        $kategori->delete();
        return redirect('kategori')->with('status',"Kategori berhasil dihapus!");
    }

}
