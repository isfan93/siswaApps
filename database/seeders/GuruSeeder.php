<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        guru::create([
            'nama_guru' => 'Agus',
            'nip'       => '1234',
            'id_mapel'  => '1',
            'alamat'    => 'Jl.Raya No.1 Garut',
            'no_telp'   => '0829292929',
            'email'     => 'guru1@gmail.com',
            'foto'      => 'guru1.jpg'
        ]);

        guru::create([
            'nama_guru' => 'Budi',
            'nip'       => '4567',
            'id_mapel'  => '2',
            'alamat'    => 'Jl.Raya No.2 Garut',
            'no_telp'   => '0822229999',
            'email'     => 'guru2@gmail.com',
            'foto'      => 'guru2.jpg'
        ]);

        guru::create([
            'nama_guru' => 'Nuri',
            'nip'       => '8900',
            'id_mapel'  => '3',
            'alamat'    => 'Jl.Raya No.3 Garut',
            'no_telp'   => '0812334556',
            'email'     => 'guru3@gmail.com',
            'foto'      => 'guru3.jpg'
        ]);
    }
}

