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
        DB::table('users')->insert([
            [
                'name' => 'Supper Admin',
                'email' => 'thian200298@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => '1',
                'business_type_id' => '1',
                'expertise_id' => '1',
                'local_conext_id' => '1'
            ],
            [
                'name' => 'Tran Thi An',
                'email' => 'tta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '2',
                'expertise_id' => '2',
                'local_conext_id' => '2'
            ],
            [
                'name' => 'Nguyen Thi An',
                'email' => 'nta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '3',
                'expertise_id' => '3',
                'local_conext_id' => '3'
            ],
            [
                'name' => 'Vo Thi An',
                'email' => 'vta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '2',
                'expertise_id' => '2',
                'local_conext_id' => '3'
            ],
            [
                'name' => 'Luong Thi An',
                'email' => 'lta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '3',
                'expertise_id' => '3',
                'local_conext_id' => '2'
            ],
            [
                'name' => 'Hoang Thi An',
                'email' => 'hta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '2',
                'expertise_id' => '3',
                'local_conext_id' => '3'
            ],
            [
                'name' => 'Dao Thi An',
                'email' => 'dta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '1',
                'expertise_id' => '2',
                'local_conext_id' => '1'
            ],
            [
                'name' => 'Pham Thi An',
                'email' => 'pta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '3',
                'expertise_id' => '2',
                'local_conext_id' => '3'
            ],
            [
                'name' => 'Cao Thi An',
                'email' => 'cta@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => null,
                'business_type_id' => '2',
                'expertise_id' => '3',
                'local_conext_id' => '2'
            ],
        ]);
    }
}
