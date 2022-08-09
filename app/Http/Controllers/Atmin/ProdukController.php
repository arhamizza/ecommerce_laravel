<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class produkController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return view('atmin.produk.index', compact('produk'));
    }

    public function add()
    {
        $kategori = Kategori::all();
        return view('atmin.produk.tambah',compact('kategori'));
    }

    public function insert(Request $request)
    {
        $produk = new produk();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('atmin/assets/uploads/produk', $filename);
            $produk->image = $filename;
        }
        $produk->cate_id = $request->input('cate_id');
        $produk->nama = $request->input('nama');
        $produk->slug = $request->input('slug');
        $produk->small_description = $request->input('small_description');
        $produk->description = $request->input('description');
        $produk->original_price = $request->input('original_price');
        $produk->selling_price = $request->input('selling_price');
        $produk->tax = $request->input('tax');
        $produk->qty = $request->input('qty');
        $produk->status = $request->input('status') == TRUE ? '1' : '0';
        $produk->trending = $request->input('trending') == TRUE ? '1' : '0';
        $produk->meta_title = $request->input('meta_title');
        $produk->meta_keyword = $request->input('meta_keyword');
        $produk->meta_description = $request->input('meta_description');
        $produk->save();
        return redirect('/dashboard')->with('status', "produk Berhasil Ditambahkan!");
    }

    public function edit($id)
    {
        $produk = produk::find($id);
        return view('atmin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = produk::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'atmin/assets/uploads/produk/'.$produk->image;
            if (File::exists($path))
             {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('atmin/assets/uploads/produk', $filename);
            $produk->image = $filename;
        }
        $produk->nama = $request->input('nama');
        $produk->slug = $request->input('slug');
        $produk->small_description = $request->input('small_description');
        $produk->description = $request->input('description');
        $produk->original_price = $request->input('original_price');
        $produk->selling_price = $request->input('selling_price');
        $produk->tax = $request->input('tax');
        $produk->qty = $request->input('qty');
        $produk->status = $request->input('status') == TRUE ? '1' : '0';
        $produk->trending = $request->input('trending') == TRUE ? '1' : '0';
        $produk->meta_title = $request->input('meta_title');
        $produk->meta_keyword = $request->input('meta_keyword');
        $produk->meta_description = $request->input('meta_description');
        $produk->save();
        return redirect('produk')->with('status',"produk telah di update!");
    }
    public function destroy($id)
    {
        $produk = produk::find($id);
        if ($produk->image)
         {
            $path = 'atmin/assets/uploads/kategori/'.$produk->image;
            if (File::exists($path))
             {
                File::delete($path);
            }
        }
        $produk->delete();
        return redirect('produk')->with('status',"Produk berhasil dihapus!");
    }

}
