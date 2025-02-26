<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisNilai extends Model
{
    /** @use HasFactory<\Database\Factories\AnalisisNilaiFactory> */
    protected $table = 'analisis_nilais';
    protected $fillable = [
        'nama_siswa',
        'kelas',
        'hasil_jurusan',
    ];
}
