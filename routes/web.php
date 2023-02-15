<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk_C;
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
    return view('welcome');
});

// login
route::get('/login', [Produk_C::class,'login'])->name('login');
route::post('/progin', [Produk_C::class,'progin']);
// Register
route::get('/register', [Produk_C::class,'register'])->name('register');
route::post('/regis',[Produk_C::class,'regis']);
// Dashboard
route::get('/dashboard', [Produk_C::class,'dashboard'])->name('dashboard');
// Kelola Produk
route::get('/produk', [Produk_C::class,'produk'])->name('produk');
// Tambah
route::get('/tambah', [Produk_C::class,'tambah'])->name('tambah');
route::post('/prosesproduk', [Produk_C::class,'store']);
// Edit
route::get('/edit_produk/{id}', [Produk_C::class,'edit'])->name('edit');
route::post('/edit_produk/{id}/prosesedit', [Produk_C::class,'ProsesEditProduk']);
// Hapus
Route::get('/delete/{id}', [Produk_C::class, 'delete']);


