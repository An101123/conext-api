<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title'       => '[Webinar] Let’s Help Startups Series: Tips to Make Your Startup Stand Out',
                'image'       => 'https://storage.googleapis.com/conext-production/detail/67646647_71324239_35429499_80603001.png',
                'description' => '<p>In 2021, OVHcloud Startup Program Asia Pacific is going to run a series of webinars to share ideas, tips and guides from the subject matter experts to support startups in the ecosystem.</p><br></br><p>Join us in the panel discussion to learn from our guest speakers who will share ideas on how to market your business, the importance of networking and tips to make your startup stand out among the crowd.</p>',
                'start_time'  => '2021-2-2 10:00',
                'end_time'    => '2021-2-2 12:45',
            ],
            [
                'title'       => 'Philosophy and AI workshop - New date!',
                'image'       => 'https://storage.googleapis.com/conext-production/44352622_51128864_50634485_58271033.png',
                'description' => '<p>We are pleased to announce a philosophy and AI workshop at the IDEA Centre in the University of Leeds. Talks will be in the fields of philosophy (ethics and mind), artificial intelligence, data ethics and related areas. There will be a range of UK based speakers and in-depth discussion of issues related to how data and artificial intelligence can be applied to real world challenges.</p><br></br><p>We want to facilitate integration of philosophical concerns and technical approaches to technology - so we welcome attendees from philosophy, computer science, or any other areas that have a perspective on the philosophical issues raised by AI.</p>',
                'start_time'  => '2021-2-4 16:45',
                'end_time'    => '2021-2-5 20:15',
            ],
            [
                'title'       => '[Webinar] Designing and Implementing Microsoft DevOps (AZ-400) Free Training',
                'image'       => 'https://storage.googleapis.com/conext-production/detail/48011514_57158121_74855021_28416126.png',
                'description' => '<p>In this free training we will be covering various topics for Microsoft certificate exam </p><strong>AZ-400 Designing and Implementing Microsoft DevOps Solutions. </strong><p>This training will be series of sessions and in each session we will be covering seprate topics from official course outline of this exam. To complete the full training, you will need to attend all the sessions.</p>',
                'start_time'  => '2021-2-6 20:30',
                'end_time'    => '2021-2-2 23:30',
            ],
            [
                'title'       => 'Startups in a Down Economy: Legal, Business, and Financing Strategies',
                'image'       => 'https://storage.googleapis.com/conext-production/detail/74415961_44166104_46612190_34261902.png',
                'description' => '<p>This is an online event. Participation is 100% online. -Participants can be located anywhere in the world!</p><br></br><p>All Eventbrite registrants will receive a FREE soft copy of this classic book by Roger Royse (the speaker): Dead on Arrival: How to Avoid the Legal Mistakes That Could Kill Your Startup.</p>',
                'start_time'  => '2021-2-10 10:00',
                'end_time'    => '2021-2-2 11:30',
            ],
            [
                'title'       => 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                'image'       => 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                'description' => '<p><strong>Want to get started in the #1 Most Promising Job, according to LinkedIn 2019? Python is your first step!</strong></p><h4><strong>About this Event</strong></h4><p>According to LinkedIn, the "#1 Most Promising Job" is data science! One of the major building blocks to data science is Python. What is data science? What is Python? If you’re curious, join this free virtual workshop to learn the basics of Python from our very own Data Science instructors and get an introduction to the field of data science, brought to you live from the comfort of your own home.</p><p>Python is the dominant programming language in data science, used to manipulate data, conduct analysis, and apply machine learning algorithms. You will gain hands-on practice with programming Python including syntax, data types, control structures, and functions. Don’t worry -- no prior experience is needed to participate in this workshop.</p><p>Save your seat quickly - our Python workshops are always in high demand!</p><p><strong>What you need:</strong></p><p>1. Laptop (does not matter what kind). You need to be able to access WiFi and run an internet browser.</p><p>2. To RSVP!</p><p><strong>AGE REQUIREMENT</strong>: 17+</p><p>------------------------</p><p><strong>Register Here: </strong><a href="https://www.eventbrite.com/e/codeup-learn-to-code-workshop-python-intro-to-data-science-tickets-132201162235?aff=ebdssbonlinesearch">https://www.eventbrite.com/e/codeup-learn-to-code-workshop-python-intro-to-data-science-tickets-132201162235?aff=ebdssbonlinesearch</a></p>',
                'start_time'  => '2021-01-30 23:00',
                'end_time'    => '2021-01-31 00:30',
            ],
            [
                'title'       => 'Accelerator startups: Where are they now? | Day 4 Leicester Startup Week',
                'image'       => 'https://storage.googleapis.com/conext-production/87378889_45338706_81330973_32753718.png',
                'description' => "<p><strong>Leicester Startups Accelerator- Meet the Startups</strong></p><h4><strong>About this Event</strong></h4><p>After completing the first ever Leicester Startups Accelerator in Dec 2020, some of our cohort will join us for Leicester Startup Week to update us on their progress. What lessons did they learn? Have any had investment? Did any pivot entirely? Find out as they deliver their 'elevator pitch' and tell us about the impact of being on an accelerator had on their startups.</p><h4><strong>Agenda:</strong></h4><p><strong>12:30 - An introduction to Leicester Startup Accelerator: </strong>Sam Larke - Leicester Startup Co-working Project Manager</p><p><strong>12:40 - Elevator pitches from the 2020 Leicester Startups Accelerator cohort: </strong>Hamza Datoo - Founder Workwyse, Sukhveer Atwal - Founder Girls Lead, Ashraf Attia - Co-founder Predictiva, Ben Morris - Founder Torch Legal.</p><p><strong>12:45 - A roundtable discussion with the founders on their experience with the Leicester Startup Accelerator: </strong>Hamza Datoo - Founder Workwyse, Sukhveer Atwal - Founder Girls Lead, Ashraf Attia - Co-founder Predictiva, Ben Morris - Founder Torch Legal.</p><p>Hear from the founders themselves what they learnt throughout the programme, the biggest challenges they faced and where they are now.</p><p><strong>13:15 - Q&amp;A</strong></p><p>Take the opportunity to ask the founders more about their startup journey or find out more details about how the Leicester Startup Accelerator 2021 could be a path for you!</p><p>-------------------------------</p><p>Leicester Startup Week is a celebration of startups across the city. We will be hosting events each day from 25-29 January covering topics like marketing, customer development, equity and fundraising. Experienced business leaders will be on hand to share their tips for what it takes to get investment ready. There will also be a chance to hear from new startup entrepreneurs about starting out, as well as established founders about their journeys.</p><p>If you’re working on or have an idea for an innovative, potentially-scalable business and would like support and advice from other local entrepreneurs then <a href='https://www.eventbrite.com/e/113998751334'>sign-up</a> to our Helpdesk</p><p><strong>Register Here</strong>: <a href='https://www.eventbrite.com/e/accelerator-startups-where-are-they-now-day-4-leicester-startup-week-tickets-134033976231?aff=ebdssbonlinesearch&amp;keep_tld=1'>https://www.eventbrite.com/e/accelerator-startups-where-are-they-now-day-4-leicester-startup-week-tickets-134033976231?aff=ebdssbonlinesearch&amp;keep_tld=1</a></p>",
                'start_time'  => '2021-2-6 20:30',
                'end_time'    => '2021-2-2 23:30',
            ]
        ]);
    }
}
