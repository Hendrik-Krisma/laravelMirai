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

Route::get('/ invoices', function () {
    return view('invoices');
});

Route::get('/penjualanMirai',[OrderController::class, 'index'])->name('penjualanMirai');

Route::get('/tambahDataOrder',[OrderController::class, 'tambahDataOrder'])->name('tambahDataOrder');

Route::post('/insertData',[OrderController::class, 'insertData'])->name('insertData');