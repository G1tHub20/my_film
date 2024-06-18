<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributors')->insert([
            [
               'distributor' => '東宝' ,
               'created_at' => Now()
            ],
            [
               'distributor' => 'ワーナー・ブラザース映画' ,
               'created_at' => Now()
            ],
            [
               'distributor' => 'UIP' ,
               'created_at' => Now()
            ],
        ]);
    }
}
