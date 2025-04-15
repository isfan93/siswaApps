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
        Route::get('/form-data-siswa', 'formDataSiswa')->name('form-data-siswa');
        Route::post('/tambah-data-siswa', 'tambahDataSiswa')->name('tambah-data-siswa');
        Route::get('/hapus-siswa/{id}', 'hapusDataSiswa')->name('hapus-siswa');

        Route::get('/siswa/daftar-siswa', 'daftarSiswa')->name('daftar-siswa');
        Route::get('/siswa/daftar-nilai-siswa', 'index')->name('daftar-nilai-siswa');
        Route::get('/siswa/input-nilai/{id}', 'inputNilai')->name('input-nilai');
        Route::post('/siswa/simpan-nilai', 'simpanNilai')->name('simpan-nilai');
        Route::get('/siswa/data-nilai-siswa/{id}', 'dataNilaiSiswa')->name('data-nilai-siswa');
        Route::post('/siswa/simpanHasil','simpanHasil')->name('simpan-hasil');
        Route::get('/siswa/analisis-jurusan','DataJurusan')->name('analisis-jurusan');
        // Route::get('/analisis-nilai','formAnalisis')->name('analisis-nilai');

        Route::get('/siswa/lihatNilai/{id}','lihatNilai')->name('lihat-nilai');


        // Route::get('/dataKelas', 'dataKelas')->name('dataKelas');
    });
});

