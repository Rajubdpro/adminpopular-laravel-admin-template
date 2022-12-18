<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Helpers;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'role_name' => 'Super Admin',
                'role_status' => 1,
                'show_option' => implode(',', array_keys(Helpers::getAccessModules())),
                'created_at' => now(),
                'updated_at' =>  now(),
            ],

            [
                'role_name' => 'Admin',
                'role_status' => 1,
                'show_option' => implode(',', array_keys(Helpers::getAccessModules())),
                'created_at' => now(),
                'updated_at' =>  now(),
            ],

            [
                'role_name' => 'User',
                'role_status' => 1,
                'show_option' => implode(',', array_keys(Helpers::getAccessModules())),
                'created_at' => now(),
                'updated_at' =>  now(),
            ],


        ]);
    }
}
