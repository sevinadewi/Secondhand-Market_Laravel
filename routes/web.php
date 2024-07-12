<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupThingsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('landing');
Route::get('/products', [DashboardController::class, 'product'])->name('products.index');
Route::get('/register', [LoginController::class, 'register']);
Route::get('/register', [LoginController::class, 'register'])->name('register.get');
Route::post('/register', [LoginController::class, 'register_post'])->name('register.post');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::get('/product', [GroupThingsController::class, 'product']);
Route::get('/homeware', [GroupThingsController::class, 'homeware'])->name('homeware.get');
Route::get('/fashion', [GroupThingsController::class, 'fashion'])->name('fashion.get');
Route::get('/furniture', [GroupThingsController::class, 'furniture'])->name('furniture.get');
Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('detail');
Route::get('/buy/{id_barang}', [GroupThingsController::class, 'buy'])->name('buy');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-dashboard', '\App\Http\Controllers\Admin\AdminController@index')->name('admin-dashboard');
    Route::get('/admin-barang', [AdminController::class, 'barang'])->name('admin-barang');
    Route::get('/admin-barang/{id_barang}', [AdminController::class, 'deleteBarang']);
    Route::post('/admin-barang', [AdminController::class, 'createBarang']);
    Route::post('/admin-barang/{id_barang}', [AdminController::class, 'editBarang']);
    Route::get('/admin-transaksi', [AdminController::class, 'transaksi'])->name('admin-transaksi');
    Route::get('/admin-detail-transaksi', [AdminController::class, 'transaksi']);
    Route::post('/admin-transaksi', [AdminController::class, 'createTransaksi']);
    Route::post('/admin-transaksi/{id_transaksi}', [AdminController::class, 'editTransaksi']);
});
