<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvincesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () { return view('login3'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pro', [ProvincesController::class,'pro']);


// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('dashboard', 'Atmin\FrontendController@index');
//     Route::get('kategori', 'Atmin\KategoriController@index');
// });

// Route::get('/atmin', function () {
//     return view('atmin/index');
// });
Route::get('dashboard', 'Atmin\FrontendController@index');
Route::get('kategori', 'Atmin\KategoriController@index');
Route::get('tambah-kategori', 'Atmin\KategoriController@tambah');



 route::middleware(['auth','isAdmin'])->group(function (){

    Route::get('/dashboard', function () {
        return view('atmin.index');
     });
 });

 Route::post('insert-kategori','Atmin\KategoriController@insert');