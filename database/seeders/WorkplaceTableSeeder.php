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
                'image' => 'https://storage.googleapis.com/conext-production/detail/33343779_44105731_76539100_29852148.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'Goo-Coworking Space',
                'price' => 100000,
                'address' => '4th Floor, Lobby B, AZ Sky Tower, Dinh Cong Urban Area, Hoang Mai, Hanoi',
                'image' => 'https://storage.googleapis.com/conext-production/detail/86561228_76970771_11642109_18992707.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'HanoiHub Coworking Space',
                'price' => 120000,
                'address' => 'No.2, Alley 59, Lang Ha street, Hanoi, Vietnam',
                'image' => 'https://storage.googleapis.com/conext-production/detail/81944009_27734106_88563496_68161076.png',
                'local_conext_id' => '1',
            ],
            [
                'name' => 'DNC Danang Coworking Space',
                'price' => 75000,
                'address' => '31 Tran Phu Street, Hai Chau, Da Nang',
                'image' => 'https://storage.googleapis.com/conext-production/detail/74545652_63108450_13006962_81258977.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'IOT Space',
                'price' => 80000,
                'address' => '63 Phan Dang Luu, Cuong Cuong Bac, Hai Chau, Da Nang.',
                'image' => 'https://storage.googleapis.com/conext-production/detail/59324724_94684560_12735540_67610982.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Beans Workspace',
                'price' => 100000,
                'address' => '3rd Floor, 84 Chau Thi Vinh Te, My An, Ngu Hanh Son District, Da Nang City.',
                'image' => 'https://storage.googleapis.com/conext-production/detail/15112766_53947440_48919644_50049365.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Enouvo Space',
                'price' => 100000,
                'address' => '15 Ta My Duat Street, Son Tra District, Danang City, Vietnam',
                'image' => 'https://storage.googleapis.com/conext-production/detail/56235175_15028224_57742376_35438759.png',
                'local_conext_id' => '2',
            ],
            [
                'name' => 'Rilex Co-working space',
                'price' => 45000,
                'address' => 'Floor 2, Golden King Building, 15 Nguyen Luong Bang St, Tan Phu Ward, District 7, HCMC',
                'image' => 'https://storage.googleapis.com/conext-production/detail/29549405_16569826_43764455_75272101.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'Sharespace Co-working',
                'price' => 50000,
                'address' => '92 - 98 Nguyen Cong Tru st, Nguyen Thai Binh Ward, District 1, HCMC',
                'image' => 'https://storage.googleapis.com/conext-production/detail/25824222_91530450_51155575_36176958.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'Urbanfresh Co-working Space',
                'price' => 99000,
                'address' => '27 Thuy Loi, Phuoc Long A, District 9, Ho Chi Minh City',
                'image' => 'https://storage.googleapis.com/conext-production/detail/20499434_90629452_90563480_27811466.png',
                'local_conext_id' => '3',
            ],
            [
                'name' => 'The InnoHouse Coworking Space',
                'price' => 100000,
                'address' => '431A Hoang Van Thu Street, Ward 4, Tan Binh District, Ho Chi Minh City.',
                'image' => 'https://storage.googleapis.com/conext-production/detail/46056091_99964337_44831246_54530975.png',
                'local_conext_id' => '3',
            ]
        ]);
    }
}
