<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvincesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Atmin\KategoriController;
use App\Http\Controllers\Atmin\produkController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\produksController;

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


Route::get('/login', function () {
    return view('login3');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pro', [ProvincesController::class, 'pro']);


// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('dashboard', 'Atmin\FrontendController@index');
//     Route::get('kategori', 'Atmin\KategoriController@index');
// });

// Route::get('/atmin', function () {
//     return view('atmin/index');
// });



route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('kategori', 'Atmin\KategoriController@index');
    Route::get('tambah-kategori', 'Atmin\KategoriController@tambah');
    Route::post('insert-kategori', 'Atmin\KategoriController@insert');
    Route::get('edit-kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('update-kategori/{id}', [KategoriController::class, 'update']);
    Route::get('hapus-kategori/{id}', [KategoriController::class, 'destroy']);
    


    Route::get('/dashboard', function () {
        return view('atmin.index');
    });
});

    Route::get('produk', [produkController::class, 'index']);
    Route::get('tambah-produk', [produkController::class, 'add']);
    Route::post('insert-produk', [produkController::class, 'insert']);
    Route::get('edit-produk/{id}', [produkController::class, 'edit']);
    Route::put('update-produk/{id}', [produkController::class, 'update']);
    Route::get('hapus-produk/{id}', [produkController::class, 'destroy']);

    
