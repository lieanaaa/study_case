<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APiProduk_C;
use App\Http\Controllers\APiUser_C;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/apiProduk', [APiProduk_C::class, 'index']);
Route::get('/detailProduk/{id}', [APiProduk_C::class, 'show']);
Route::post('/createProduk', [APiProduk_C::class, 'store']);
Route::put('/updateProduk/{id}', [APiProduk_C::class, 'update']);
Route::delete('/deleteProduk/{id}', [APiProduk_C::class, 'destroy']);

Route::get('/dataUser', [APiUser_C::class, 'index']);
Route::get('/totalUser', [APiUser_C::class, 'show']);
