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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa')->length(50);
            $table->string('nisn')->unique();
            $table->string('jenis_kelamin')->length(50);
            // $table->date('tanggal_lahir');
            // $table->string('alamat')->length(150);
            // $table->string('no_telp')->length(50);;
            // $table->string('email')->unique();
            // $table->string('foto')->nullable();
            // $table->string('kelas')->length(50);;
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->enum('status',[1,2]);
            // $table->foreignId('jurusan_id')->constrained('jurusans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
