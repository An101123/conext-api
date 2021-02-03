<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkplaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_places')->insert([
            [
                'name' => 'Campus K Coworking Space',
                'price' => 50000,
                'address' => '15th Floor, Tower B, Song Da Building, Pham Hung, My Dinh 1, Nam Tu Liem, Hanoi',
                'image' => 'https://storage.googleapis.com/conext-production/99935659_55835531_17331773_75997746.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'COGO Coworking Space Viet Tower',
                'price' => 100000,
                'address' => '3-4 Floor, No.1 Thai Ha Street, Dong Da District, Ha Noi City',
                'image' => 'https://storage.googleapis.com/conext-production/88909656_45870405_56859079_96285272.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'Goo-Coworking Space',
                'price' => 100000,
                'address' => '4th Floor, Lobby B, AZ Sky Tower, Dinh Cong Urban Area, Hoang Mai, Hanoi',
                'image' => 'https://storage.googleapis.com/conext-production/96914670_91988898_43760338_58223805.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'HanoiHub Coworking Space',
                'price' => 120000,
                'address' => 'No.2, Alley 59, Lang Ha street, Hanoi, Vietnam',
                'image' => 'https://storage.googleapis.com/conext-production/34175115_25024335_24473124_37304008.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'DNC Danang Coworking Space',
                'price' => 75000,
                'address' => '31 Tran Phu Street, Hai Chau, Da Nang',
                'image' => 'https://storage.googleapis.com/conext-production/64775483_39945853_39110715_46208967.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'IOT Space',
                'price' => 80000,
                'address' => '63 Phan Dang Luu, Cuong Cuong Bac, Hai Chau, Da Nang.',
                'image' => 'https://storage.googleapis.com/conext-production/16396435_63068963_50684597_26582124.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Beans Workspace',
                'price' => 100000,
                'address' => '3rd Floor, 84 Chau Thi Vinh Te, My An, Ngu Hanh Son District, Da Nang City.',
                'image' => 'https://storage.googleapis.com/conext-production/71602096_36013824_15011473_55468966.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Enouvo Space',
                'price' => 100000,
                'address' => '15 Ta My Duat Street, Son Tra District, Danang City, Vietnam',
                'image' => 'https://storage.googleapis.com/conext-production/78964740_95420832_76204544_44065307.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Rilex Co-working space',
                'price' => 45000,
                'address' => 'Floor 2, Golden King Building, 15 Nguyen Luong Bang St, Tan Phu Ward, District 7, HCMC',
                'image' => 'https://storage.googleapis.com/conext-production/48403493_56724556_73093850_31456629.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'Sharespace Co-working',
                'price' => 50000,
                'address' => '92 - 98 Nguyen Cong Tru st, Nguyen Thai Binh Ward, District 1, HCMC',
                'image' => 'https://storage.googleapis.com/conext-production/62096975_77606109_78581381_55800471.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'Urbanfresh Co-working Space',
                'price' => 99000,
                'address' => '27 Thuy Loi, Phuoc Long A, District 9, Ho Chi Minh City',
                'image' => 'https://storage.googleapis.com/conext-production/16571044_91882936_51760705_56696086.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'The InnoHouse Coworking Space',
                'price' => 100000,
                'address' => '431A Hoang Van Thu Street, Ward 4, Tan Binh District, Ho Chi Minh City.',
                'image' => 'https://storage.googleapis.com/conext-production/48363707_41518347_66563128_57383935.png',
                'local_conext_id' => '3',
            ]
        ]);
    }
}
