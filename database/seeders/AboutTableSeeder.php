<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'content' => '<p>In the end of 2017, founders of ST United company decided to invest in coworking space business after long time focusing mainly on offshore software development industry.</p><p>Later, from April 2018, there were 2 new coworking spaces in Danang city , IoT Space and Nomad Space. It has been a new amazing journey for the founders and they figured out that behind this low margin business, coworking space unlike any other office rental facilities, it has a philosophy and contains core values including collaboration, openness, sustainability, accessibility, and community, being a key propellant to why coworking space has become a global trend in business.</p><p>And the idea of Conext is come up with above core values.</p><p>Conext offers a vibrant atmosphere where you can meet others, find partner/cofounder, network, schedule meetups, and most importantly accelerate your works through collaboration with local digital community in Vietnam.</p><p>At Conext, you could connect with startups, digital nomads, freelancers or even investor, incubators…who’s belonging to the community from massive of coworking spaces in the busiest cities in Vietnam.</p><p>Will you join our community, and together we continue writing our story ?</p>'
        ]);
    }
}
