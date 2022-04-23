<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\UserController;



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


Route::controller(UserController::class)->group(function(){
    Route::get('/','beranda');
    Route::get('/pendaftaran','pendaftaran');
    Route::post('/pendaftaran', 'store');
    Route::get('/masuk','masuk')->name('login');
    Route::get('/pemilihan','pemilihan');
    Route::put('/pilih/{user}','pilih');


});
Route::post('/masuk', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/beranda', [AdminController::class, 'beranda']);

    Route::controller(PendaftarController::class)->group(function(){
        Route::get('/pendaftar', 'index');
        Route::get('/pendaftar/create', 'create');
        Route::post('/pendaftar', 'store');
        Route::get('/pendaftar/{id}', 'show');
        Route::get('/pendaftar/{pendaftar}/edit', 'edit');
        Route::put('/pendaftar/{pendaftar}', 'update');
        Route::put('/pendaftar/verifikasi/{pendaftar}', 'verifikasi');
        Route::delete('/pendaftar/{pendaftar}', 'destroy');
    });

    Route::controller(PemilihController::class)->group(function(){
        Route::get('/pemilih', 'index');
        Route::get('/pemilih/{id}', 'show');
        Route::get('/pemilih/{pemilih}/edit', 'edit');
        Route::put('/pemilih/{pemilih}', 'update');
        Route::put('/pemilih/verifikasi/{pemilih}', 'verifikasi');
        Route::delete('/pemilih/{pemilih}', 'destroy');
    });

    Route::controller(KandidatController::class)->group(function(){
        Route::get('/kandidat', 'index');
        Route::get('/kandidat/create', 'create');
        Route::post('/kandidat', 'store');
        Route::get('/kandidat/{id}', 'show');
        Route::get('/kandidat/{kandidat}/edit', 'edit');
        Route::put('/kandidat/{kandidat}', 'update');
        Route::put('/kandidat/verifikasi/{kandidat}', 'verifikasi');
        Route::delete('/kandidat/{kandidat}', 'destroy');
    });

    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin', 'index');
        Route::get('/admin/create', 'create');
        Route::post('/admin', 'store');
        Route::get('/admin/{id}', 'show');
        Route::get('/admin/{admin}/edit', 'edit');
        Route::put('/admin/{admin}', 'update');
        Route::put('/admin/verifikasi/{admin}', 'verifikasi');
        Route::delete('/admin/{admin}', 'destroy');
    });

});

