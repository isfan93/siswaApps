<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx_siswa extends Model
{
    /** @use HasFactory<\Database\Factories\TrxSiswaFactory> */
    protected $fillable = [
        'id_siswa',
        'id_kelas',
        'id_jurusan',
        'id_guru',
        'id_mapel',
        'nilai_pelajaran',
        'tanggal',
        'keterangan',        
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan', 'id');
    }

    public function guru()
    {
        return $this->belongsTo(guru::class, 'id_guru', 'id');
    }

    public function pelajaran()
    {
        return $this->belongsTo(pelajaran::class, 'id_mapel', 'id');
    }
}
