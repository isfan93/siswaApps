<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\MataPelajaran;
use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();
        return view('siswa.create', compact('mataPelajarans'));
    }
    
    public function rekomendasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nilai.*' => 'required|numeric|min=0|max=100'
        ]);
        
        // Simpan nilai siswa
        foreach ($request->nilai as $mataPelajaranId => $nilai) {
            NilaiSiswa::updateOrCreate(
                ['mata_pelajaran_id' => $mataPelajaranId],
                ['nilai' => $nilai]
            );
        }
        
        // Proses Profile Matching
        $jurusans = Jurusan::with('mataPelajarans')->get();
        $nilaiSiswas = NilaiSiswa::with('mataPelajaran')->get();
        
        $results = [];
        
        foreach ($jurusans as $jurusan) {
            $total = 0;
            $totalBobot = 0;
            
            foreach ($jurusan->mataPelajarans as $mataPelajaran) {
                $nilaiSiswa = $nilaiSiswas->where('mata_pelajaran_id', $mataPelajaran->id)->first();
                
                if ($nilaiSiswa) {
                    $gap = $nilaiSiswa->nilai - $mataPelajaran->pivot->bobot;
                    $total += $this->convertGapToScore($gap);
                    $totalBobot += $mataPelajaran->pivot->bobot;
                }
            }
            
            if ($totalBobot > 0) {
                $results[] = [
                    'jurusan' => $jurusan,
                    'score' => $total / $totalBobot
                ];
            }
        }
        
        // Urutkan berdasarkan score tertinggi
        usort($results, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });
        
        return view('hasil', compact('results'));
    }
    
    private function convertGapToScore($gap)
    {
        // Konversi gap ke nilai berdasarkan tabel profile matching
        // Anda bisa menyesuaikan ini sesuai kebutuhan
        if ($gap == 0) return 5;
        if (abs($gap) == 1) return 4;
        if (abs($gap) == 2) return 3;
        if (abs($gap) == 3) return 2;
        return 1;
    }
}
