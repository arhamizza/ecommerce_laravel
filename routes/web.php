<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Atmin\KategoriController;
use App\Http\Controllers\Atmin\produkController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\produksController;
use AzisHapidin\IndoRegion\IndoRegion;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('view-category/{cate_slug}/{prod_slug}', [FrontendController::class, 'productview']);


Route::get('/login', function () {
    return view('login3');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form',[IndoRegionController::class, 'form'])->name('form');


// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('dashboard', 'Atmin\FrontendController@index');
//     Route::get('kategori', 'Atmin\KategoriController@index');
// });

// Route::get('/atmin', function () {
//     return view('atmin/index');
// });

Route::post('add-to-cart',[CartController::class, 'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart',[CartController::class,'updatecart']);

Route::middleware(['auth'])->group(function (){
    Route::get('cart',[CartController::class, 'viewcart']);
    Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order',[CheckoutController::class, 'placeorder']);
    Route::post('getkabupaten',[CheckoutController::class, 'getkabupaten']);
    Route::post('getkecamatan',[CheckoutController::class, 'getkecamatan']);
    Route::post('getdesa',[CheckoutController::class, 'getdesa']);
});

route::middleware(['auth', 'isAdmin'])->group(function () {

    //kategori admin
    Route::get('kategori', 'Atmin\KategoriController@index');
    Route::get('tambah-kategori', 'Atmin\KategoriController@tambah');
    Route::post('insert-kategori', 'Atmin\KategoriController@insert');
    Route::get('edit-kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('update-kategori/{id}', [KategoriController::class, 'update']);
    Route::get('hapus-kategori/{id}', [KategoriController::class, 'destroy']);

    // produk admin
    Route::get('produk', [produkController::class, 'index']);
    Route::get('tambah-produk', [produkController::class, 'add']);
    Route::post('insert-produk', [produkController::class, 'insert']);
    Route::get('edit-produk/{id}', [produkController::class, 'edit']);
    Route::put('update-produk/{id}', [produkController::class, 'update']);
    Route::get('hapus-produk/{id}', [produkController::class, 'destroy']);



    Route::get('/dashboard', function () {
        return view('atmin.index');
    });
});




