<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        kelas::create([
            'nama_kelas' => 'X-1',
            // 'jurusan_id'    => '1',
            'wali_kelas_id' => '1'
        ]);

        kelas::create([
            'nama_kelas' => 'X-2',
            // 'jurusan_id'    => '1',
            'wali_kelas_id' => '2'
        ]);

        kelas::create([
            'nama_kelas' => 'X-3',
            // 'jurusan_id'    => '1',
            'wali_kelas_id' => '3'
        ]);
    }
}
