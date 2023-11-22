<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderPayment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [OrderPayment::class, 'index']);
Route::post('/checkout', [OrderPayment::class, 'checkout']);
Route::post('/midtrans-callback', [OrderPayment::class, 'callback']);