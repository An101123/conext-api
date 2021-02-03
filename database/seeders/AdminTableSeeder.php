<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
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
                'name' => 'Super Admin',
                'email' => 'thian200298@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => '1',
                'business_type_id' => '1',
                'expertise_id' => '1',
                'local_conext_id' => '1',
                'avatar' => 'https://storage.googleapis.com/conext-develop/avatar1.png'
            ],
        ]);
    }
}
