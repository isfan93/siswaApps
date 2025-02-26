<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_jurusan',
        'singkatan',
    ];
    
    // public function siswa(){
    //     return $this->hasMany(siswa::class);
    // }
}
