<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    /** @use HasFactory<\Database\Factories\PelajaranFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_pelajaran',
        'guru',
    ];
}
