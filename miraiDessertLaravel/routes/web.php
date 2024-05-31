<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/penjualanMirai', function () {
    return view('tableOrders');
});

Route::get('/invoices', function () {
    return view('invoices');
});

Route::get('/tampilkandata/{id}', [OrderController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [OrderController::class, 'updatedata']);

