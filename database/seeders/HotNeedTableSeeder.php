<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotNeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hot_needs')->insert([
            [
                'topic' => 'Off road trails in/around Danang for bicycling',
                'city' => 'Da Nang',
                'category_id' => '5',
                'expected_deadline' => '2020-05-31',
                'brief_description' => 'I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.',
                'full_description' => 'Hi folks,<br></br>I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.<br></br>We have many of them here in Chiang Mai, and I know they probably exists around Danang too, probably up around Thọ Quang, since I see a lot of trails up there on topo maps, but I cant find any information about trails that are suitable for a mountain bike when I google.<br></br>I really like off-road trails as opposed to paved roads, so I would appreciate any help/advice someone might be able to offer.<br></br>Thanks!',
                'user_id' => '1',
            ],
            [
                'topic' => 'Google Slides Designer wanted!!!',
                'city' => 'Da Nang',
                'category_id' => '2',
                'expected_deadline' => '2020-05-31',
                'brief_description' => 'Looking for a Google Presentation (PowerPoint) Expert to help refresh our sales presentation and make it awesome!',
                'full_description' => 'We work with a lot of vegan business as well so would be great to work with a fellow vegan but really we want an amazing presentation so skills are most important!
                Anyone out there who can help us redesign the slides? ?
                Interested people just email us your sample work to mycareer@ardorseo.com.',
                'user_id' => '2',
            ],
            [
                'topic' => 'Call for Unity game developers',
                'city' => 'Da Nang',
                'category_id' => '2',
                'expected_deadline' => '2020-05-11',
                'brief_description' => 'Lets collaborate for unity game development.',
                'full_description' => 'I have few gaming projects and looking for Unity game developers for mobile. If you are a game developer then Lets connect and do some projects together.',
                'user_id' => '3',
            ],
            [
                'topic' => '.Net/ReactJS Senior needing',
                'city' => 'Da Nang',
                'category_id' => '4',
                'expected_deadline' => '2020-05-31',
                'brief_description' => 'We have a short term project, about 3 month and need to collaborate with a freelancer who expertising into .Net (web-based)',
                'full_description' => 'This is a short term project and we cannot recruit for long term engineer, so that why we think about working with freelancer instead.<br></br>Please contact me for more information about project.',
                'user_id' => '4',
            ],
            // [
            //     'topic' => 'Looking for Graphic design courses',
            //     'city' => 'Ha Noi',
            //     'category_id' => '5',
            //     'expected_deadline' => '2020-06-07',
            //     'brief_description' => 'Want to sign up for a short term Graphic design courses',
            //     'full_description' => 'My goal is to be able to design a logo, posters, banners,...',
            //     'user_id' => '5',
            // ],
            // [
            //     'topic' => 'Looking for a job',
            //     'city' => 'Ho Chi Minh',
            //     'category_id' => '4',
            //     'expected_deadline' => '2020-06-08',
            //     'brief_description' => 'Dev position',
            //     'full_description' => 'I am a newbie Software Development and now I am looking for an internship in Da Nang. During school time, I have got some major experiences with my part-time job. If you are needed, please contact me and I will send my CV then. Regards!',
            //     'user_id' => '6',
            // ],
            // [
            //     'topic' => 'Call for support in PSD to HTML/CSS',
            //     'city' => 'Da Nang',
            //     'category_id' => '2',
            //     'expected_deadline' => '2020-07-04',
            //     'brief_description' => "I have a small gig that's some designs need to be transformed to html/css/js",
            //     'full_description' => "I have a small gig that's some designs need to be transformed to html/css/js. Happy to talk with you about this project and your ratecard. My location is around An Thuong area and it could be nice to meet each other to discuss further more.
            //     Thank you in advance.",
            //     'user_id' => '4',
            // ],
            // [
            //     'topic' => 'Any PHP or Python engineer in Conext?',
            //     'city' => 'Da Nang',
            //     'category_id' => '4',
            //     'expected_deadline' => '2020-07-31',
            //     'brief_description' => "We're startup from Singapore and we need onboard some developers",
            //     'full_description' => "We are looking for reliable, smart, experienced and resourceful software developers who wish to grow their skills in working on our major platforms in PHP/Python.<br></br>Please submit your current CV, availability and salary expectation.",
            //     'user_id' => '7',
            // ],
        ]);
    }
}
