<?php

namespace Database\Seeders;

use App\Models\trx_siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrxSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        trx_siswa::create([
            'id_siswa' => '1',
            'id_kelas' => '2',
            'matematika' => '80',
            'fisika' => '80',
            'kimia' => '80',
            'biologi' => '80',
            'bahasa_indonesia' => '80',
            'bahasa_inggris' => '80',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Baik'
        ]);

        trx_siswa::create([
            'id_siswa' => '2',
            'id_kelas' => '2',
            'matematika' => '90',
            'fisika' => '80',
            'kimia' => '80',
            'biologi' => '80',
            'bahasa_indonesia' => '80',
            'bahasa_inggris' => '80',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Baik'
        ]);

        trx_siswa::create([
            'id_siswa' => '3',
            'id_kelas' => '1',
            'matematika' => '70',
            'fisika' => '70',
            'kimia' => '70',
            'biologi' => '70',
            'bahasa_indonesia' => '70',
            'bahasa_inggris' => '70',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Cukup'
        ]);
    }
}
