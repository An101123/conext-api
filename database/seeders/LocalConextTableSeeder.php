<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalConextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_conexts')->insert([
            'name' => 'Ha Noi',
            'name' => 'Da Nang',
            'name' => 'Ho Chi Minh',
        ]);
    }
}
