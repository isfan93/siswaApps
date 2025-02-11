<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    protected $fillable = [
        'nis',
        'nama_siswa',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_telp',
        'email',
        'foto',
        'id_kelas',
        'id_jurusan',
    ];
    
    protected $table = 'siswas';

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }

    public function trxSiswa(){
        return $this->hasMany(trx_siswa::class);
    }
    

}
