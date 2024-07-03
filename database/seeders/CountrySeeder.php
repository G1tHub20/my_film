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
            [
               'country' => 'フランス' ,
               'created_at' => Now()
            ],
            [
               'country' => 'ドイツ' ,
               'created_at' => Now()
            ],
            [
               'country' => '韓国' ,
               'created_at' => Now()
            ],
            [
                'country' => '中国' ,
                'created_at' => Now()
            ],
            [
               'country' => 'カナダ' ,
               'created_at' => Now()
            ],
            [
               'country' => '香港' ,
               'created_at' => Now()
            ],
            [
               'country' => 'インド' ,
               'created_at' => Now()
            ],
            [
               'country' => 'その他' ,
               'created_at' => Now()
            ],
        ]);
    }
}
