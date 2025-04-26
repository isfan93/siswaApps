<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiswaController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;




Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login');
    Route::post('/login-proses', 'loginProses')->name('login.proses');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::controller(MainController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/DataSiswa', 'DataSiswa');
        
    });
    
    Route::controller(AdminController::class)->group(function(){
        Route::get('/user', 'index')->name('admin.index');
        Route::get('/user/tambah-user', 'formTambahUser')->name('admin.tambah');
        Route::post('/user/tambah-user-proses', 'tambahUser')->name('tambah-user');
        Route::get('/user/hapus-user/{id}', 'hapusUser')->name('hapus-user');
        Route::get('/user/edit-user/{id}', 'editUser')->name('edit-user');
        Route::post('/user/edit-user-proses/{id}', 'UpdateUser')->name('update-user');
    });


    Route::controller(SiswaController::class)->group(function(){
        Route::get('/siswa/daftar-siswa', 'index')->name('daftar-nilai-siswa');
        Route::get('/siswa/form-tambah-data', 'formDataSiswa')->name('form-data-siswa');
        Route::post('/siswa/tambah-data-siswa', 'tambahDataSiswa')->name('tambah-data-siswa');
        Route::get('/siswa/hapus-siswa/{id}', 'hapusDataSiswa')->name('hapus-siswa');

        Route::post('/siswa/import', 'importSiswa')->name('siswa.import');
        Route::post('/siswa/analisisAll', 'analisisAll')->name('siswa.analisisAll');




        
    });
});

