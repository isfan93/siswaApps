<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\pelajaran;
use App\Models\siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {   
        $no = 1;
        $siswaAll =  siswa::all()->count();
        $guruAll = guru::all()->count();
        $pelajaranAll = pelajaran::all()->count();
        $kelasAll = kelas::all()->count();
        $siswas = siswa::all();
        return view('dashboard.index', compact('no','siswaAll','guruAll','pelajaranAll','kelasAll','siswas'));
    }
}
