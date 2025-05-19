<?php

namespace App\Http\Controllers;

use App\Models\AnalisisNilai;
use App\Models\guru;
use App\Models\jumlahJurusan;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\pelajaran;
use App\Models\siswa;
use App\Models\trx_siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {   
        $no = 1;
        $siswaAll =  trx_siswa::all()->count();
        $lk = trx_siswa::where('jenis_kelamin', 'Laki-laki')->count();
        $pr = trx_siswa::where('jenis_kelamin', 'Perempuan')->count();
        $kelasAll = kelas::all()->count();
        // $siswas = siswa::all();

        // $jumlahJurusan = jumlahJurusan::all();

        $jumlahJurusan = trx_siswa::selectRaw('keterangan as nama_jurusan, keterangan, COUNT(*) as jumlah')
        ->groupBy('keterangan')
        ->get();


        $analisisNilai = trx_siswa::selectRaw('keterangan')
        ->groupBy('keterangan')
        ->get();
        
        $nsiswa = $jumlahJurusan->pluck('jumlah');
        $csiswa = $jumlahJurusan->pluck('nama_jurusan');
        return view('dashboard.index', compact('no','siswaAll','lk','pr','kelasAll','csiswa','nsiswa','jumlahJurusan'));
    }

   
}