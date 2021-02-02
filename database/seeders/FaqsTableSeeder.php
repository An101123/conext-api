<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => '<p><strong>How can I meet up with other conexters?</strong></p>',
                'answer'   => '<p><img src="https://storage.googleapis.com/conext-develop/faq_catch_up.png"></p><p>When you log in to your account, you can see Meetup Community. Please choose positions or industries of Conextor who you want to meet, and click let&rsquo;s meet to connect with them.</p>',
            ],
            [
                'question' => '<p><strong>How to create an account?</strong></p>',
                'answer'   => '<p>On the menu bar, please choose join Conextor. Now, you can either create a new account by providing your name, email and password or use your Facebook/Google account to sign up.</p><p><img src="https://storage.googleapis.com/conext-develop/faq_sign_up.png"></p>',
            ],
            [
                'question' => '<p><strong>Who is CoNEXTer?</strong></p>',
                'answer'   => '<p>Conextor is a community for information and communications technology (ICT ) members, investors, venture companies or even people who are seeking jobs in technology and want to find more information about job market.',
            ],
            [
                'question' => '<p><strong>How can I change my account information?</strong></p>',
                'answer'   => '<p>On the menu bar, please click on your profile picture.</p><p>Looking to your left hand side, you will see a menu bar. Click “Update Profile” to change your personal information</p><p><img src="https://storage.googleapis.com/conext-develop/faq_change_info.png"></p>',
            ],
            [
                'question' => '<p><strong>How can I get a voucher?</strong></p>',
                'answer'   => '<p>Scroll down to see “Explore” part. You can see “Vouchers” in your left hand side. Click on to find your vouchers!</p><p><img src="https://storage.googleapis.com/conext-develop/faq_voucher.png"></p><br><p>When you choose a voucher, you can click on get voucher code. After clicking on the button, you can see your code and validation of your vouchers</p><p><img src="https://storage.googleapis.com/conext-develop/faq_get_voucher.png"></p><br><p>You can also see all your vouchers by click “View my vouchers” button.</p><p><img src="https://storage.googleapis.com/conext-develop/faq_show_code.png"></p>',
            ],
        ]);
    }
}
