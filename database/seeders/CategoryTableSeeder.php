<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'COVID19 Support'
            ],
            [
                'category_name' => 'Collaboration'
            ],
            [
                'category_name' => 'Business Legacy'
            ],
            [
                'category_name' => 'Recruitment'
            ],
            [
                'category_name' => 'Life, Food, Activities'
            ],
            [
                'category_name' => 'Lost n Found'
            ],
        ]);
    }
}
