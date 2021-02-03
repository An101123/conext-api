<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 21 ; $i++) { 
            DB::table('users')->insert([
                [
                    'name' => 'User '.$i,
                    'email' => 'thian200298'.$i.'@gmail.com',
                    'password' => Hash::make('123123123'),
                    'business_type_id' => rand(1,8),
                    'expertise_id' => rand(1,8),
                    'local_conext_id' => rand(1,3),
                    'avatar' => 'https://storage.googleapis.com/conext-develop/avatar'.$i.'.png'
                ],
            ]);
        }
    }
}
