<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
        ]);
        Role::create([
            'name' => 'admin',
        ]);

        // Super Admin
         $admin = User::create([
         'name' => 'Moh. Daniel Akbar',
         'email' => 'danzstt99@gmail.com',
         'password' => bcrypt('Daniel99;'),
         ]);
         $admin->assignRole('superadmin');

         // Admin
         $sekdis = User::create([
         'name' => 'Daniel Akbar',
         'email' => 'danielakbar@gmail.com',
         'password' => bcrypt('danielakbar;'),
         ]);
         $sekdis->assignRole('admin');
    }
}
