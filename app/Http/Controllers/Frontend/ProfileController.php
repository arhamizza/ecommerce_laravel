<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class profileController extends Controller
{

    public function index()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $old_cartitem = Cart::where('user_id', Auth::id())->get();
        foreach ($old_cartitem as $item )
        {
            if (!Produk::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitem = Cart::where('user_id', Auth::id())->get();

        return view('frontend.profile.myaccount', compact('cartitem','provinces'));


    }
    public function index2()
    {
        if(Auth::user()->address1 == NULL)
        {
            return redirect('/updateprofile')->with('status','isi profile dahulu');
        }

        return view('frontend.profile.indexprofile');
    }

    public function updateprofile(request $request)
    {


            $user = User::where('id', Auth::id())->first();
            $user->first_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->name = $request->input('name');
            $user->telephone = $request->input('telephone');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->postcode = $request->input('postcode');
            $user->provinsi = $request->input('provinsi');
            $user->kota = $request->input('kota');
            $user->kecamatan = $request->input('kecamatan');
            $user->kelurahan = $request->input('kelurahan');
            $user->update();



        return redirect('/profile')->with('status', "Kategori Berhasil Ditambahkan!");
    }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $option = "<option>Pilih Kabupaten...</option>";
        $regencies = Regency::where('province_id',$id_provinsi)->get();
        foreach ($regencies as $kota) {
            $option.= "<option value = '$kota->id'>$kota->name</option>";
        }
        echo $option;
    }
    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $option = "<option>Pilih Kecamatan...</option>";
        $districts = District::where('regency_id',$id_kabupaten)->get();

        foreach ($districts as $kecamatan) {
            $option.= "<option value = '$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }
    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $option = "<option>Pilih Desa...</option>";
        $villages = Village::where('district_id',$id_kecamatan)->get();

        foreach ($villages as $desa) {
            $option.= "<option value = '$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

}
