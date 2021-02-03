<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BusinessTypeTableSeeder::class]);
        $this->call([ExpertiseTableSeeder::class]);
        $this->call([EventTableSeeder::class]);
        $this->call([LocalConextTableSeeder::class]);
        $this->call([VoucherTableSeeder::class]);
        $this->call([AboutTableSeeder::class]);
        $this->call([FaqsTableSeeder::class]);
        $this->call([TermAndPolicyTableSeeder::class]);
        $this->call([CategoryTableSeeder::class]);
        $this->call([AdminTableSeeder::class]);
        $this->call([UserTableSeeder::class]);
        $this->call([HotNeedTableSeeder::class]);
    }
}
