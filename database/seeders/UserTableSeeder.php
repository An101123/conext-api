<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Nguyen Tich Duy', 'Tran Dinh Van', 'Tran Nhat Huy', 'Pham Anh Phu', 'Pham Anh Thien', 'Tran Thi An', 'Pham Quy', 'Nguyen Thi Ut Thao', 'Tran Quang Phu', 'Nguyen Tran Quoc Vinh', 'Pham Duong Thu Hang', 'Pham Thi Yen', 'Doan Duy Binh', 'Ho Ngo My Vy', 'Pham Anh Phuong', 'Vo Van Luong', 'Tran Quoc Chien', 'Bui Ngoc Vinh', 'Tran Van Hung', 'Pham Dinh Lau', 'Doan Chi Binh'];
        for ($i=1; $i <= 20 ; $i++) { 
            DB::table('users')->insert([
                [
                    'name' => $name[$i],
                    'email' => 'user'.$i.'@gmail.com', 
                    'password' => Hash::make('123123123'),
                    'business_type_id' => rand(1,8),
                    'expertise_id' => rand(1,8),
                    'local_conext_id' => rand(1,3),
                    'avatar' => 'https://storage.googleapis.com/conext-develop/avatar'.$i.'.png'
                ],
            ]);
        }
    }
}
