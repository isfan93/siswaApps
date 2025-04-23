<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    protected $fillable = [
        'nama_siswa',
        'nisn',
        // 'jenis_kelamin',
        // 'tanggal_lahir',
        // 'alamat',
        // 'no_telp',
        // 'email',
        'kelas_id',
        'status'
        // 'jurusan_id',
    ];
    
    protected $table = 'siswas';

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    // public function jurusan()
    // {
    //     return $this->belongsTo(jurusan::class);
    // }

    public function trxSiswa(){
        return $this->hasMany(trx_siswa::class);
    }

    public function nilaiSiswas(){
        return $this->hasMany(nilaiSiswa::class);
    }


    

}
