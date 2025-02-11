<?php

namespace Database\Seeders;

use App\Models\jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        jurusan::create([
            'nama_jurusan' => 'Ilmu Pengetahan Alam',
            'singkatan'    => 'IPA',
        ]);

        jurusan::create([
            'nama_jurusan' => 'Ilmu Pengetahan Sosial',
            'singkatan'    => 'IPS',
        ]);

        jurusan::create([
            'nama_jurusan' => 'Teknologi Jaringan',
            'singkatan'    => 'TKJ',
        ]);
    }
}
