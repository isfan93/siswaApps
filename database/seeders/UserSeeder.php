<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('a'),
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'Guru',
            'username' => 'guru',
            'password' => bcrypt('guru'),
            'level' => 'user',
        ]);
    }
}
