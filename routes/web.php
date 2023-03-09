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

Route::get('/', [cateringController::class, 'index']);
Route::get('/login', [userController::class, 'index']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout']);

// Route::get('/catering', [cateringController::class, 'semuaCatering']);
Route::get('/catering/{catering:slug}', [cateringController::class, 'show']);
Route::get('/catering/{catering:slug}/{menu:slug}', [cateringController::class, 'menuDetail']);
Route::post('/tambah-keranjang/{menu}', [cateringController::class, 'tambahKeranjang']);
Route::get('/keranjang', [cateringController::class, 'keranjang']);
Route::get('/menu', [cateringController::class, 'menu']);
Route::get('/pesanan', [cateringController::class, 'pesanan']);

Route::get('/dashboard/index', [DashboardController::class, 'index']);
Route::get('/dashboard/catering/home', [UserCateringController::class, 'index']);
// Route::get('/dashboard/catering/menu', [UserCateringController::class, 'menu']);