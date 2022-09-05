<?php

use App\Http\Controllers\Atmin\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Atmin\KategoriController;
use App\Http\Controllers\Atmin\OrderController;
use App\Http\Controllers\Atmin\produkController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\Frontend\RatingController;
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

Route::get('product-list', [FrontendController::class, 'productlistAjax']);
Route::post('searchproduct', [FrontendController::class, 'searchProduct'])->name('searchproduct');



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

Route::get('load-cart-data',[CartController::class, 'cartcount']);
Route::get('load-wishlist-data',[WishlistController::class, 'wishlistcount']);
Route::post('add-to-cart',[CartController::class, 'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart',[CartController::class,'updatecart']);
Route::post('add-to-wishlist',[WishlistController::class,'add']);
Route::post('delete-wishlist-item',[WishlistController::class,'deleteitem']);

Route::middleware(['auth'])->group(function (){
    Route::get('cart',[CartController::class, 'viewcart']);
    Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order',[CheckoutController::class, 'placeorder']);
    Route::post('getkabupaten',[CheckoutController::class, 'getkabupaten']);
    Route::post('getkecamatan',[CheckoutController::class, 'getkecamatan']);
    Route::post('getdesa',[CheckoutController::class, 'getdesa']);

    Route::get('my-orders',[UserController::class, 'index']);
    Route::get('view-order/{id}',[UserController::class, 'view']);

    Route::get('wishlist',[WishlistController::class,'index']);

    Route::post('add-rating',[RatingController::class, 'add']);

    Route::post('proceed-to-pay',[CheckoutController::class,'razorpaycheck']);


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

    // order admin
    Route::get('users',[FrontendController::class, 'users']);
    Route::get('orders',[OrderController::class, 'index']);
    Route::get('admin/view-order/{id}',[OrderController::class, 'view']);
    Route::get('order-history',[OrderController::class, 'orderhistory']);
    Route::put('update-order/{id}',[OrderController::class, 'updateorder']);
    Route::get('users',[DashboardController::class, 'users']);
    Route::get('view-users/{id}',[DashboardController::class, 'viewuser']);

    Route::get('/dashboard', function () {
        return view('atmin.index');
    });
});

route::middleware(['auth', 'isPenjual'])->group(function () {
      // produk admin
    Route::get('produk2', [produkController::class, 'indexpenjual']);
    Route::get('tambah-produk2', [produkController::class, 'addpenjual']);
    Route::post('insert-produk2', [produkController::class, 'insertpenjual']);
    Route::get('edit-produk2/{id}', [produkController::class, 'editpenjual']);
    Route::put('update-produk2/{id}', [produkController::class, 'updatepenjual']);
    Route::get('hapus-produk2/{id}', [produkController::class, 'destroypenjual']);

    // order admin
    Route::get('users2',[FrontendController::class, 'userspenjual']);
    Route::get('orders2',[OrderController::class, 'indexpenjual']);
    Route::get('admin/view-order2/{id}',[OrderController::class, 'viewpenjual']);
    Route::get('order-history2',[OrderController::class, 'orderhistorypenjual']);
    Route::put('update-order2/{id}',[OrderController::class, 'updateorderpenjual']);
    Route::get('users2',[DashboardController::class, 'userspenjual']);
    Route::get('view-users2/{id}',[DashboardController::class, 'viewuserpenjual']);

    Route::get('/penjual', function () {
        return view('penjual.index');
    });
});




