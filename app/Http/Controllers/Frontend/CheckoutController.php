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
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Courier;

class CheckoutController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function index()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $provinsis = Provinsi::all();
        $couriers = Courier::all();
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

        return view('frontend.checkout.checkout', compact('cartitem','provinces','provinsis','couriers'));
    }

    public function alamat()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $provinsis = Provinsi::all();
        $couriers = Courier::all();
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

        return view('frontend.alamat.alamat', compact('cartitem','provinces','provinsis','couriers'));
    }

    public function getCity($id)
    {
        //mengambil data kota/kab
        $city = Kota::where('province_id',$id)->get();
        return response()->json($city);
    }

    public function placeorder(request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->telephone = $request->input('telephone');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->postcode = $request->input('postcode');
        $order->provinsi = $request->input('provinsi');
        $order->kota = $request->input('kota');
        // $order->kecamatan = $request->input('kecamatan');
        // $order->kelurahan = $request->input('kelurahan');
        $order->payment_mode = $request->input('payment_mode');
        $order->payment_id = $request->input('payment_id');
        // Menghitung total price
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems_total as $prod)
        {
            $total += $prod->products->selling_price * $prod->prod_qty;
        }
        $order->total_price = $total;
        $order->tracking_no = '#ruangbit'.rand(1111,9999);
        $order->save();

        // $order->id;

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems as $item )
        {
            OrderItem::create([
                'order_id'=> $order->id,
                'prod_id'=> $item->prod_id,
                'qty'=> $item->prod_qty,
                'price'=> $item->products->selling_price,
            ]);
            $prod = Produk::where('id', $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if(Auth::user()->address1 == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->first_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->telephone = $request->input('telephone');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->postcode = $request->input('postcode');
            $user->provinsi = $request->input('provinsi');
            $user->kota = $request->input('kota');
            // $user->kecamatan = $request->input('kecamatan');
            // $user->kelurahan = $request->input('kelurahan');
            $user->update();

        }

        $cartitem = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitem);

        if ($request->input('payment_mode') == "Paid by RazorPay" || $request->input('payment_mode') == "Paid by PayPal")
        {
            return response()->json(['status'=>"Order placed successfully"]);
        }
        return redirect('/')->with('status','Order Sudah Berhasil');
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

    public function razorpaycheck(Request $request)
    {
        $cartitems = Cart::where('user_id',Auth::id())->get();
        $total_price = 0;
        foreach($cartitems as $item)
        {
            $total_price += $item->products->selling_price * $item->prod_qty;
        }

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $address1 = $request->input('address1');
        $postcode = $request->input('postcode');
        $address2 = $request->input('address2');
        $provinsi = $request->input('provinsi');
        $kabupaten = $request->input('kabupaten');
        // $kecamatan = $request->input('kecamatan');
        // $kelurahan = $request->input('kelurahan');

        return response()->json([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'telephone'=>$telephone,
            'address1'=>$address1,
            'postcode'=>$postcode,
            'address2'=>$address2,
            'provinsi'=>$provinsi,
            'kabupaten'=>$kabupaten,
            // 'kecamatan'=>$kecamatan,
            // 'kelurahan'=>$kelurahan,
            'total_price'=> $total_price
        ]);
    }
}
