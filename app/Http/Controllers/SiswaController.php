<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use App\Imports\NilaiSiswaImport;
use App\Models\AnalisisNilai;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\mataPelajaran;
use App\Models\nilaiSiswa;
use App\Models\pelajaran;
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
        $siswas = siswa::all();
        $nilaiSiswa = trx_siswa::all();
        
        $dataAns = AnalisisNilai::all();
        
        

        return view('siswa.nilai', compact('no','nilaiSiswa','siswas','dataAns'));
    }

    public function daftarSiswa(){
        $no=1;
        $siswas = siswa::all();
        return view('siswa.daftarSiswa', compact('no','siswas'));
    }

    public function formDataSiswa(){
        $kelass = kelas::all();
        // // $jurusans = jurusan::all();
        // $mataPelajarans = mataPelajaran::all();
        // return view('siswa.create', compact('mataPelajarans'));
        return view('siswa.create', compact('kelass'));
        
    }

    public function tambahDataSiswa(Request $request){
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'alamat' => 'required',
            // 'no_telp' => 'required',
            // 'email' => 'required',
            'kelas_id' => 'required',
            // 'jurusan_id' => 'required',

            // 'id_siswa' => 'required',
            // 'id_kelas' => 'required',
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'bahasa_inggris' => 'required',
            // 'tanggal' => 'required',
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

            // 'tanggal_lahir' => $request->tanggal_lahir,
            // 'alamat'        => $request->alamat,
            // 'no_telp'       => $request->no_telp,
            // 'email'         => $request->email,
            'kelas_id'      => $request->kelas_id,
            'status'        => 1
        ];

        // $dataNilai =[
        //     'nisn'              => $request->nisn,
        //     'kelas_id'          => $request->kelas_id,
        //     'nama_siswa'        => $request->nama_siswa,
        //     'jenis_kelamin'     => $request->jenis_kelamin,
        //     'matematika'        => $request->matematika,
        //     'fisika'            => $request->fisika,
        //     'kimia'             => $request->kimia,
        //     'biologi'           => $request->biologi,
        //     'bahasa_inggris'    => $request->bahasa_inggris,
        //     'tanggal'           => $request->tanggal,
        //     'keterangan'        => $request->keterangan,
        //     'status' => 1,
        // ];

        // siswa::create($dataSiswa);
        trx_siswa::create($dataSiswa);
        return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Siswa Berhasil Ditambahkan');
    
    }

    public function hapusDataSiswa($id){
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->route('daftar-siswa')->with('success', 'Data Siswa Berhasil Dihapus');

    }

    public function inputNilai(Request $request, $id){
        $siswa = siswa::find($id);
        // $pelajarans = pelajaran::all();
        
        
        return view('siswa.inputNilai', compact('siswa'));
    }

    public function simpanNilai(Request $request){
        
        $request->validate([
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'bahasa_indonesia' => 'required',
            'bahasa_inggris' => 'required',
            'tanggal' => 'required',
        ]);

        $dataNilai =[
            'id_siswa' => $request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'matematika' => $request->matematika,
            'fisika' => $request->fisika,
            'kimia' => $request->kimia,
            'biologi' => $request->biologi,
            'bahasa_indonesia' => $request->bahasa_indonesia,
            'bahasa_inggris' => $request->bahasa_inggris,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'status' => 1,
        ];

        $status_siswa = [
            'status' => 2,
        ];

        $dataSiswa = siswa::find($request->id_siswa);
        // dd($dataSiswa);

        if($dataSiswa){
            $dataSiswa->update($status_siswa);

            $data = trx_siswa::create($dataNilai);

            return redirect()->route('siswa')->with('success', 'Data Nilai Berhasil Ditambahkan');
        }else {
            return redirect()->route('siswa')->with('error', 'Data Nilai Gagal Ditambahkan');
        }
    }

    public function dataNilaiSiswa($id){
        $no=1;
        $nilaiSiswa = trx_siswa::find($id);
        return view('siswa.nilaiSiswa', compact('no','nilaiSiswa'));
    }

    public function lihatNilai($id){
        $no=1;
        $siswa = trx_siswa::find($id);
        return view('siswa.lihatNilai', compact('no','siswa'));
    }

    public function simpanHasil(Request $request){
        $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'hasil_jurusan' => 'required',
        ]);

        $jurusan = [
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'hasil_jurusan' => $request->hasil_jurusan,
        ];

        $status_trx = [
            'status' => 2,
        ];

        $data_trx = trx_siswa::find($request->id);
        // dd($data_trx);

        if($data_trx){
            $data_trx->update($status_trx);
            AnalisisNilai::create($jurusan);
            return redirect()->route('daftar-nilai-siswa')->with('success', 'Data Jurusan Berhasil Ditambahkan');
        }else{
            return redirect()->route('daftar-nilai-siswa')->with('error', 'Data Jurusan Gagal Ditambahkan');
        }
        // return view('siswa.nilaiSiswa');
    }

    public function dataJurusan(){
        $no =1;
        $dataAns = AnalisisNilai::all();
        return view('siswa.dataAnalisis', compact('no','dataAns'));
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
        return view('siswa.nilai', compact('no','nilaiSiswa'));
    }
    
    

    

}   
