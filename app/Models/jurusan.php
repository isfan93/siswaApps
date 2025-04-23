<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class jurusan extends Model
{
    
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
    
    public function mataPelajarans(){
        return $this->belongsToMany(mataPelajaran::class)->withPivot('bobot');
    }
}
