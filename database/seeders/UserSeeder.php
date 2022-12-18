<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        [
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('super_admin@gmail.com'),
            'email_verified_at'=> now(),
            'created_at' => now(),
            'updated_at' =>  now(),
        ],

        [
            'role_id' => 2,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'email_verified_at'=>now(),
            'created_at' => now(),
            'updated_at' =>  now(),
        ],

        [
            'role_id' => 4,
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'email_verified_at'=>now(),
            'created_at' => now(),
            'updated_at' =>  now(),
        ]

        ]);
    }
}
