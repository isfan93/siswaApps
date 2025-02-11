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
            'id_guru' => '1',
            'id_mapel' => '1',
            'nilai_pelajaran' => '90',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Baik'
        ]);

        trx_siswa::create([
            'id_siswa' => '1',
            'id_guru' => '2',
            'id_mapel' => '2',
            'nilai_pelajaran' => '80',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Baik'
        ]);

        trx_siswa::create([
            'id_siswa' => '1',
            'id_guru' => '3',
            'id_mapel' => '3',
            'nilai_pelajaran' => '70',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Cukup'
        ]);

        trx_siswa::create([
            'id_siswa' => '2',
            'id_guru' => '1',
            'id_mapel' => '1',
            'nilai_pelajaran' => '70',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Cukup'
        ]);

        trx_siswa::create([
            'id_siswa' => '2',
            'id_guru' => '2',
            'id_mapel' => '2',
            'nilai_pelajaran' => '75',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Cukup'
        ]);

        trx_siswa::create([
            'id_siswa' => '2',
            'id_guru' => '3',
            'id_mapel' => '3',
            'nilai_pelajaran' => '75',
            'tanggal' => '2021-01-01',
            'keterangan' => 'Cukup'
        ]);
    }
}
