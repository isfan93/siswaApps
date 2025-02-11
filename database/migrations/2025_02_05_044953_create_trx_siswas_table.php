<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trx_siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->constrained('siswas');
            // $table->foreignId('kelas_id')->constrained('kelas');
            // $table->foreignId('jurusan_id')->constrained('jurusans');
            $table->foreignId('id_guru')->constrained('gurus');
            $table->foreignId('id_mapel')->constrained('pelajarans');
            $table->string('nilai_pelajaran');
            $table->date('tanggal');
            $table->string('keterangan');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_siswas');
    }
};
