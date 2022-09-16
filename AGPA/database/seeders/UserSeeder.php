<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'user1',
            'last_name' => 'Dophys',
            'mobile_phone' => 'elPheno',
            'username' => 'driver',
            'role' => 1,
            'email' => 'dophys@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'first_name' => 'justin',
            'last_name' => 'jusy',
            'mobile_phone' => '',
            'username' => 'dispatcher',
            'role' => 2,
            'email' => 'jusy@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'first_name' => 'shama',
            'last_name' => 'maryal',
            'mobile_phone' => '',
            'username' => 'passenger',
            'role' => 3,
            'email' => 'shama@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
