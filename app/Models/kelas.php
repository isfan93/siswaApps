<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'jurusan_id',
        'wali_kelas_id',
    ];

    protected $table = 'kelas';

    public function siswa(){
        return $this->hasMany(siswa::class, 'id_kelas');
    }
}
