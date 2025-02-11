<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiswaController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login/index');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login-proses', 'loginProses')->name('login.proses');
    Route::get('/logout', 'logout')->name('logout');
}); 


Route::middleware('auth')->group(function(){
    Route::controller(MainController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/DataSiswa', 'DataSiswa');
    });
    
    Route::controller(SiswaController::class)->group(function(){
        Route::get('/daftarNilaiSiswa', 'index')->name('siswa');
        Route::get('/nilai-siswa', 'nilaiSiswa')->name('nilai-siswa');
        Route::get('/data-nilai-siswa', 'dataNilaiSiswa')->name('data-nilai-siswa');
        Route::get('/input-nilai', 'inputNilai')->name('input-nilai');
    });
});

