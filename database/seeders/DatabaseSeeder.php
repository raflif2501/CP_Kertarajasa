<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(KontakSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(BeritaSeeder::class);
    }
}
