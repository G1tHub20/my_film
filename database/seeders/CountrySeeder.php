<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
               'country' => '日本' ,
               'created_at' => Now()
            ],
            [
               'country' => 'アメリカ' ,
               'created_at' => Now()
            ],
            [
               'country' => 'イギリス' ,
               'created_at' => Now()
            ],
        ]);
    }
}
