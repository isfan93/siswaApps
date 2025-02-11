<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use App\Models\trx_siswa;

use function PHPUnit\Framework\returnSelf;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no=1;
        $siswas = siswa::all();
        $nilaiSiswa = trx_siswa::all();
        // $siswa = Siswa::where('id',1)->get();
        // dd($siswa);
        return view('siswa.nilai', compact('no','nilaiSiswa','siswas'));
    }

    public function dataNilaiSiswa(){
        return view('siswa.nilaiSiswa');
    }

    public function inputNilai(){
        return view('siswa.inputNilai');
    }

}
