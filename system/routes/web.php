<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\KandidatController;


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
    return view('user.beranda');
});

Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
});

Route::get('/masuk', function () {
    return view('user.masuk');
});


Route::prefix('admin')->group(function(){
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

});

