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
            $table->string('nisn')->length(50);
            $table->string('nama_siswa')->length(50);
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->string('jenis_kelamin')->length(50);
            $table->integer('matematika');
            $table->integer('fisika');
            $table->integer('kimia');
            $table->integer('biologi');
            $table->integer('bahasa_inggris');
            $table->string('keterangan')->nullable();
            $table->integer('status')->default(0);
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
