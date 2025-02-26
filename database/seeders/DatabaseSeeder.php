<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'password' => bcrypt('admin'),
        //     'level' => 'admin',
        //     'email' => 'admin@mail.com'
        // ]);

        $this->call([
            PelajaranSeeder::class,
            GuruSeeder::class,
            JurusanSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            // TrxSiswaSeeder::class,
            UserSeeder::class
        ]);
    }
}
