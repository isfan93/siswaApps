<?php

namespace App\Http\Controllers;

use App\Exports\NilaiSiswaExport;
use App\Models\siswa;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use App\Imports\NilaiSiswaImport;
use App\Models\AnalisisNilai;
use App\Models\kelas;
use App\Models\trx_siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use function PHPUnit\Framework\returnSelf;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no=1;
        // $siswas = siswa::all();
        $nilaiSiswa = trx_siswa::all();
        
        // $dataAns = AnalisisNilai::all();
        
        

        return view('siswa.nilai', compact('no','nilaiSiswa'));
    }


    public function formDataSiswa(){
        $kelass = kelas::all();
        return view('siswa.create', compact('kelass'));
        
    }

    public function tambahDataSiswa(Request $request){
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'kelas_id' => 'required',
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'bahasa_inggris' => 'required',
        ]);

        $dataSiswa = [
            'nisn'          => $request->nisn,
            'nama_siswa'    => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,

            'matematika'        => $request->matematika,
            'fisika'            => $request->fisika,
            'kimia'             => $request->kimia,
            'biologi'           => $request->biologi,
            'bahasa_inggris'    => $request->bahasa_inggris,

            
            'kelas_id'      => $request->kelas_id,
            'status'        => 1
        ];
        trx_siswa::create($dataSiswa);
        return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Siswa Berhasil Ditambahkan');
    
    }

    public function hapusDataSiswa($id){
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->route('daftar-siswa')->with('success', 'Data Siswa Berhasil Dihapus');

    }

    public function importSiswa(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move('uploads', $filename);

        Excel::import(new NilaiSiswaImport, public_path('/uploads/'.$filename));
        
        return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Siswa Berhasil Diimport');

    }

    public function exportSiswa(){
        $data =  trx_siswa::with('siswa','kelas')->get();

        if($data->isEmpty()) {
            return redirect()->route('daftar-nilai-siswa')->with('error', 'Tidak ada data untuk diexport');
        }
        return Excel::download(new NilaiSiswaExport, 'hasil-analisis-jurusan.xlsx');
    }

    public function analisisAll()
    {
        $no=1;
        $nilaiSiswa = trx_siswa::all();

        $jurusanKriteria = [
            'TKJ' => [
                'matematika' => 80,
                'fisika' => 60,
                'kimia' => 50,
                'biologi' => 45,
                'bahasa_inggris' => 85
            ],
            'FARMASI' => [
                'matematika' => 70,
                'fisika' => 45,
                'kimia' => 50,
                'biologi' => 85,
                'bahasa_inggris' => 70
            ],
            'TSM' => [
                'matematika' => 75,
                'fisika' => 85,
                'kimia' => 50,
                'biologi' => 35,
                'bahasa_inggris' => 55
            ],
            'KEPERAWATAN' => [
                'matematika' => 60,
                'fisika' => 40,
                'kimia' => 65,
                'biologi' => 85,
                'bahasa_inggris' => 80
            ]
        ];

        
        foreach ($nilaiSiswa as $ns) {
            $jurusanTerbaik = null;
            $skorTertinggi = 0;
    
            foreach ($jurusanKriteria as $jurusan => $syarat) {
                $totalSkor = 0;
                $jumlahMapel = count($syarat);
    
                foreach ($syarat as $mapel => $nilaiMinimal) {
                    $nilai = $ns->$mapel ?? 0;
                    $skor = min($nilai / $nilaiMinimal, 1); // cap maksimal 100%
                    $totalSkor += $skor;
                }
    
                $rataRataKedekatan = $totalSkor / $jumlahMapel;
    
                // Ambil jurusan dengan rata-rata kedekatan tertinggi
                if ($rataRataKedekatan > $skorTertinggi) {
                    $skorTertinggi = $rataRataKedekatan;
                    $jurusanTerbaik = $jurusan;
                }
            }
            // trx_siswa::where('status', 0)->update(['status' => 1]);
            // Set keterangan jurusan terbaik meskipun tidak memenuhi 100% syarat
            $ns->keterangan = $jurusanTerbaik ?? 'Tidak Diketahui';
            $ns->save();
        }

        if($nilaiSiswa){
            return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Berhasil di Analisis dan Disimpan');
        }else{
            return redirect()->route('daftar-nilai-siswa')->with('error', 'Data belum ada');
        }

        
        // return view('siswa.nilai', compact('no','nilaiSiswa'))->with('success', 'Data Berhasil di Analisis dan Disimpan');
    }

    public function hapusSemuaData(){
        $data = trx_siswa::all();
        foreach ($data as $d) {
            $d->delete();
        }
        return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Berhasil Dihapus');
    }

    
}   
