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

// Get
Route::get('/apiProduk', [APiProduk_C::class, 'index']);
// Show
Route::get('/detailProduk/{id}', [APiProduk_C::class, 'show']);
// Create
Route::post('/createProduk', [APiProduk_C::class, 'store']);
// Update 
Route::put('/updateProduk/{id}', [APiProduk_C::class, 'update']);
// Delete
Route::delete('/deleteProduk/{id}', [APiProduk_C::class, 'destroy']);
// Data User
Route::get('/dataUser', [APiUser_C::class, 'index']);
// Total Data User
Route::get('/totalUser', [APiUser_C::class, 'show']);
