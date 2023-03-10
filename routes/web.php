<?php

use App\Http\Controllers\cateringController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserCateringController;
use App\Http\Controllers\userController;
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



Route::group(['middleware' => 'guest'], function () {
  Route::get('/', [cateringController::class, 'index']);
  Route::get('/login', [userController::class, 'index']);
  Route::post('/login', [userController::class, 'login']);
  Route::get('/registerpelanggan', [userController::class, 'registerpelanggan']);
  Route::post('/registercatering', [userController::class, 'storeregistercatering']);
  Route::get('/registercatering', [userController::class, 'registercatering']);
});

Route::get('/logout', [userController::class, 'logout']);
Route::get('/profil', [userController::class, 'profil']);

Route::get('/catering', [cateringController::class, 'semuaCatering']);
Route::get('/catering/{catering:slug}', [cateringController::class, 'show']);
Route::get('/catering/{catering:slug}/{menu:slug}', [cateringController::class, 'menuDetail']);
Route::post('/tambah-pesanan/{menu}', [cateringController::class, 'tambahCatering']);
Route::get('/keranjang', [cateringController::class, 'keranjang']);
Route::get('/menu', [cateringController::class, 'menu']);
Route::get('/pesanan', [cateringController::class, 'pesanan']);
Route::get('/pesanan/pesanan-belum-bayar', [cateringController::class, 'pesananBayar']);
Route::get('/pesanan/pesanan-proses', [cateringController::class, 'pesananProses']);
Route::post('/pesanan/pesanan-proses/{pesanan}', [cateringController::class, 'selesai']);
Route::get('/pesanan/pesanan-selesai', [cateringController::class, 'pesananSelesai']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/menu', [UserCateringController::class, 'menu_view']);
Route::get('/dashboard/menu/tambah-menu', [UserCateringController::class, 'menu_tambah']);
Route::post('/dashboard/menu/tambah-menu', [UserCateringController::class, 'menu_tambah_store']);
Route::get('/dashboard/kategori', [UserCateringController::class, 'kategori_view']);

Route::get('/dashboard/pesanan/belumkonfir', [UserCateringController::class, 'blm_konfir_view']);
Route::post('/dashboard/pesanan/belumkonfir/{pesanan}', [UserCateringController::class, 'blm_konfir_store']);
Route::get('/dashboard/pesanan/belumbayar', [UserCateringController::class, 'blm_bayar_view']);
Route::post('/dashboard/pesanan/belumbayar/{pesanan}', [UserCateringController::class, 'blm_bayar_store']);
Route::get('/dashboard/pesanan/proses', [UserCateringController::class, 'proses_view']);
Route::post('/dashboard/pesanan/proses/{pesanan}', [UserCateringController::class, 'proses_store']);
Route::get('/dashboard/pesanan/selesai', [UserCateringController::class, 'selesai_view']);
Route::get('/dashboard/pesanan/hapus/{pesanan}', [UserCateringController::class, 'destroy']);

Route::get('/dashboard/akun/pelanggan', [DashboardController::class, 'pelanggan_view']);
Route::get('/dashboard/akun/catering', [DashboardController::class, 'catering_view']);
