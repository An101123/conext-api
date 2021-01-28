<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_types')->insert([
            'id' => '1',
            'name' => 'Startups'
        ]);
        DB::table('expertises')->insert([
            'id' => '1',
            'name' => 'AI'
        ]);
        DB::table('local_conexts')->insert([
            'id' => '1',
            'name' => 'Ha Noi'
        ]);
        DB::table('users')->insert([
            'name' => 'Supper Admin',
            'email' => 'thian200298@gmail.com',
            'password' => Hash::make('123123123'),
            'role' => '1',
            'business_type_id' => '1',
            'expertise_id' => '1',
            'local_conext_id' => '1'
        ]);
    }
}
