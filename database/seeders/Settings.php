<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Settings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'app_name' => 'AdminPopular',
                'copyright' => 'All Right Reserved | AdminPopular',
                'email' => 'example@gmail.com',
                'phone' => '+8801794939992',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],

        ]);
    }
}
