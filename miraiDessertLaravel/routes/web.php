<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Auth\AuthController;

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
    return view('dashboard');
});

Route::get('/registration',[AuthController::class, 'registration'])->name('registration');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::post('/insertUser',[AuthController::class, 'insertUser'])->name('insertUser');

Route::get('/',[InvoiceController::class, 'index'])->name('invoices')->middleware('auth');
// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/', [AuthController::class, 'index']);
// Route::post('postsLogin', [AuthController::class, 'postLogin'])->name('login.custom');
// Route::post('custom-login', [AuthController::class, 'postLogin']); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/registration',[AuthController::class, 'registration'])->name('registration');
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::post('/insertUser',[AuthController::class, 'insertUser'])->name('insertUser');

Route::get('/penjualanMirai',[OrderController::class, 'index'])->name('penjualanMirai')->middleware('auth');
Route::get('/tambahDataOrder',[OrderController::class, 'tambahDataOrder'])->name('tambahDataOrder');
Route::post('/insertData',[OrderController::class, 'insertData'])->name('insertData');


Route::get('/invoices',[InvoiceController::class, 'index'])->name('invoices')->middleware('auth');
Route::get('/tambahDataInvoice',[InvoiceController::class, 'tambahDataInvoice'])->name('tambahDataInvoice');
Route::post('/insertInvoice',[InvoiceController::class, 'insertInvoice'])->name('insertInvoice');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/loginproses',[AuthController::class, 'loginproses'])->name('loginproses');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registeradmin',[AuthController::class, 'registeradmin'])->name('registeradmin');

Route::get('/tampilkanDataOrder/{id}',[OrderController::class, 'tampilkanDataOrder'])->name('tampilkanDataOrder');
Route::post('/updateDataOrder/{id}',[OrderController::class, 'updateDataOrder'])->name('updateDataOrder');
Route::get('/delete/{id}',[OrderController::class, 'delete'])->name('delete');

Route::get('/tampilDataInvoice/{id}',[InvoiceController::class, 'tampilDataInvoice'])->name('tampilDataInvoice');
Route::post('/updateDataInvoice/{id}',[InvoiceController::class, 'updateDataInvoice'])->name('updateDataInvoice');
Route::get('/deleteDataInvoice/{id}',[InvoiceController::class, 'deleteDataInvoice'])->name('deleteDataInvoice');

Route::get('/search', [InvoiceController::class, 'search'])->name('invoices.search');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');




