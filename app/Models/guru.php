<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    /** @use HasFactory<\Database\Factories\GuruFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_guru',
        'nip',
        'id_mapel',
        'alamat',
        'no_telp',
        'email',
        'foto',
        'mapel_id',
    ];
}
