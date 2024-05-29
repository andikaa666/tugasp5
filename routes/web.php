<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
Route::resource('destinasi', App\Http\Controllers\destinasiController::class)->middleware('auth');
Route::resource('pengunjung', App\Http\Controllers\pengunjungController::class)->middleware('auth');
Route::resource('reservasi', App\Http\Controllers\reservasiController::class)->middleware('auth');
Route::resource('transaksi', App\Http\Controllers\transaksiController::class)->middleware('auth');
