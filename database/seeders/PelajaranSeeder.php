<?php

namespace Database\Seeders;

use App\Models\pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pelajaran::create([
            'nama_pelajaran' => 'Matematika',
            'singkatan'    => 'MTK',
        ]);

        pelajaran::create([
            'nama_pelajaran' => 'Biologi',
            'singkatan'    => 'BIO',
        ]);

        pelajaran::create([
            'nama_pelajaran' => 'Fisika',
            'singkatan'    => 'FSK',
        ]);

        pelajaran::create([
            'nama_pelajaran' => 'Bahasa Indonesia',
            'singkatan'    => 'Bhs.ind',
        ]);

        pelajaran::create([
            'nama_pelajaran' => 'Kimia',
            'singkatan'    => 'KIM',
        ]);
    }
}
