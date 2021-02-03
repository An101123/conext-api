<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExploreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('explores')->insert([
            [
                'title' => 'Startups',
                'image'=> 'https://storage.googleapis.com/conext-production/startup.jpg'
            ],
            [
                'title' => 'Investment',
                'image'=> 'https://storage.googleapis.com/conext-production/investments.jpg'
            ],
            [
                'title' => 'Hot Needs',
                'image'=> 'https://storage.googleapis.com/conext-production/bg_hot_need.png'
            ],
            [
                'title' => 'Get Vouchers',
                'image'=> 'https://storage.googleapis.com/conext-production/bg_voucher.png'
            ],
            [
                'title' => 'Events',
                'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
            ],
            [
                'title' => 'Workplaces',
                'image'=> 'https://storage.googleapis.com/conext-production/bg_coworking.png'
            ],
            [
                'title' => 'Remote workers',
                'image'=> 'https://storage.googleapis.com/conext-production/remote_worker.jpg'
            ],
            [
                'title' => 'Coliving',
                'image'=> 'https://storage.googleapis.com/conext-production/coliving.jpg'
            ],

        ]);
    }
}
