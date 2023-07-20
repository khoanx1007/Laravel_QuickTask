<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'khoanx10078',
            'first_name' => 'Khoa',
            'last_name' => 'Nguyen',
            'email' => 'khoanx1007@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('abc12345'),
            'remember_token' => null,
            'is_admin' => true,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
