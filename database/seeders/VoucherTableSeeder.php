<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            [
                'title' => '[BeansWorkspace] GET FREE 2-DAY PASS TICKETS for CoNextor',
                'image' => 'https://storage.googleapis.com/conext-production/19108943_99406985_35790756_17780126.png',
                'expired_on' => '2020-12-31',
                'description' => '<p>Welcome CoNextor to BeansWorkspace</p><p>Beans offers customers <strong>2-day free</strong> for using Workspace.</p><p>Applicable Conditions:</p><ul><li>- Be member of CoNextor</li><li>- Still charge for drinks of The Local Beans.</li><li>- Use code voucher got from Conext.asia.</li></ul><p>Application time: From Now - December 31, 2020.</p><p>-------------------------------</p><p><strong>B E A N S W O R K S P A C E</strong></p><p><strong>Location:</strong></p><ul><li>- 3rd Floor, 56A Le Hong Phong, Phuoc Ninh, Hai Chau District, Da Nang City.</li><li>- 3rd Floor, 84 Chau Thi Vinh Te, My An, Ngu Hanh Son District, Da Nang City.</li></ul><p><strong>Facebook</strong>: @BeansWorkspace</p><p><strong>Phone</strong>: 0784 117 944</p><p><strong>Email</strong>:&nbsp; workspace@thelocalbeans.com</p>'
            ],
            [
                'title' => '[Hoian]15% discount when order food at Weavers Restaurant Hoi An',
                'image' => 'https://storage.googleapis.com/conext-production/64997444_46246574_77800462_16390180.png',
                'expired_on' => '2020-11-30',
                'description' => '<p>Weavers restaurant is offering 15% discount exclusively for members of Conext community. &nbsp;</p><p>In order to get the promo code, simply click on the Get Voucher button. The voucher will be sent directly to your registered email at Conext and just use it at Weavers Hoi An.</p><p>Roll up Roll up and come on down to Weavers, your No.1 British food spot in Hoi An - great British food at Vietnamese prices ????‍?<br><a href="https://www.instagram.com/WeaversHoiAn_/?fbclid=IwAR3cougPaHPWt4sQszv0JB5gAPIvZYD_Kuy9r4VdlS9fAB5a4qwvVf1xjd4">https://www.instagram.com/WeaversHoiAn_/</a><br><a href="https://twitter.com/WeaversHoiAn?fbclid=IwAR2eK2K2_i-S6D7L3MIh4WH2zucXHXRkVXQb91k_m89qKkzfzy4XMvUirYo">https://twitter.com/WeaversHoiAn</a></p><p><a href="https://www.google.com/maps/dir//Weavers/data=!4m8!4m7!1m0!1m5!1m1!1s0x31420e797208ca63:0xdda3b459d0fd0496!2m2!1d108.32789659999999!2d15.881798799999999">Get direction</a>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>'
            ],
            [
                'title' => '20% off for every coffee orders at Nomad Space',
                'image' => 'https://storage.googleapis.com/conext-production/15670774_70835628_34663649_14782329.png',
                'expired_on' => '2020-11-30',
                'description' => "<p>Nomad Space &amp; Cafes offering 20% discount for every coffee orders: americano, capuchino, latte...</p><p>In order to get the promo code, simply click on the Get Voucher button. The voucher will be sent directly to your registered email at Conext.&nbsp;</p><p>Nomad Space is a casual, comfortable, and convenient place to work with the benefit of cafe service and a collaborative community. Nomad space is intend to digital nomad community for working, meetup, business exchange... and take a great coffee with purely arabica from the highland of Vietnam.&nbsp;&nbsp;</p><p>Address: 14 An Thuong 18, Ngu Hanh Son, Danang &gt;&gt;<a href='https://goo.gl/maps/gtceTTdC244zW5S27'>Check map</a>&nbsp;</p>"
            ],
            [
                'title' => '[ENOUVO SPACE] GET PROMO CODE 10% DISCOUNT FOR DAILY PASS',
                'image' => 'https://storage.googleapis.com/conext-production/33562622_75803936_48752140_46239508.png',
                'expired_on' => '2020-10-30',
                'description' => '<p>Enouvo Space is running a special discount for member of Conext community in May 2020 with 10% off for daily pass.&nbsp;</p><p>Conextor will save 10,000 VND from the original price 100,000 VND</p><p>In order to get the promo code, simply click on the Get Voucher button. The voucher will be sent directly to your registered email at Conext.&nbsp;</p><p>Please kindly show the voucher when check-in at Enouvo Space and enjoy the productive working day.</p><p>Enouvo Space&nbsp;</p><p>Website: enouvospace.com</p><p>Address: 16-18 An Nhon 3, Son Tra, Danang</p><p>Phone: (+84) 236 3 810 449 - (+84) 935 330 727</p><p>Email: <a href="mailto:space@enouvo.com">space@enouvo.com</a></p>'
            ],
            [
                'title' => '[DNC] Get promo code 20% discount for daily pass',
                'image' => 'https://storage.googleapis.com/conext-production/61151640_41063916_81769667_72704808.png',
                'expired_on' => '2020-11-30',
                'description' => "DNC's offering the exclusively discount for member of Conext community in May 2020 with 20% discount for daily pass:<br></br>Conextor Daily pass with Only 60,000 VND (original price is 75,000 VND)<br></br>In order to get the promo code:  simply click on the Get Voucher button, and the voucher will be sent to you through your registered email at Conext. You just need to show the voucher when check-in at DNC and enjoy the discount."
            ],
            [
                'title' => '[ENOUVO SPACE] GET PROMO CODE 10% DISCOUNT FOR DAILY PASS',
                'image' => 'https://storage.googleapis.com/conext-production/55089944_13864010_74212248_59364091.png',
                'expired_on' => '2020-10-30',
                'description' => '<p>Enouvo Space is running a special discount for member of Conext community in May 2020 with 10% off for daily pass.&nbsp;</p><p>Conextor will save 10,000 VND from the original price 100,000 VND</p><p>In order to get the promo code, simply click on the Get Voucher button. The voucher will be sent directly to your registered email at Conext.&nbsp;</p><p>Please kindly show the voucher when check-in at Enouvo Space and enjoy the productive working day.</p><p>Enouvo Space&nbsp;</p><p>Website: enouvospace.com</p><p>Address: 16-18 An Nhon 3, Son Tra, Danang</p><p>Phone: (+84) 236 3 810 449 - (+84) 935 330 727</p><p>Email: <a href="mailto:space@enouvo.com">space@enouvo.com</a></p>'
            ],
            [
                'title' => '[ENOUVO SPACE] GET PROMO CODE 10% DISCOUNT FOR DAILY PASS',
                'image' => 'https://storage.googleapis.com/conext-production/33562622_75803936_48752140_46239508.png',
                'expired_on' => '2020-10-30',
                'description' => '<p>Enouvo Space is running a special discount for member of Conext community in May 2020 with 10% off for daily pass.&nbsp;</p><p>Conextor will save 10,000 VND from the original price 100,000 VND</p><p>In order to get the promo code, simply click on the Get Voucher button. The voucher will be sent directly to your registered email at Conext.&nbsp;</p><p>Please kindly show the voucher when check-in at Enouvo Space and enjoy the productive working day.</p><p>Enouvo Space&nbsp;</p><p>Website: enouvospace.com</p><p>Address: 16-18 An Nhon 3, Son Tra, Danang</p><p>Phone: (+84) 236 3 810 449 - (+84) 935 330 727</p><p>Email: <a href="mailto:space@enouvo.com">space@enouvo.com</a></p>'
            ],
        ]);
    }
}
