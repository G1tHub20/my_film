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
               'id' => 1,
               'country' => '日本',
               'created_at' => Now()
            ],
            [
               'id' => 2,
               'country' => 'アメリカ',
               'created_at' => Now()
            ],
            [
               'id' => 3,
               'country' => 'イギリス',
               'created_at' => Now()
            ],
            [
               'id' => 4,
               'country' => 'イタリア',
               'created_at' => Now()
            ],
            [
               'id' => 5,
               'country' => 'スペイン',
               'created_at' => Now()
            ],
            [
               'id' => 6,
               'country' => 'フランス',
               'created_at' => Now()
            ],
            [
               'id' => 7,
               'country' => 'ドイツ',
               'created_at' => Now()
            ],
            [
               'id' => 8,
               'country' => 'カナダ',
               'created_at' => Now()
            ],
            [
               'id' => 9,
               'country' => 'インド',
               'created_at' => Now()
            ],
            [
               'id' => 10,
               'country' => 'オーストラリア',
               'created_at' => Now()
            ],
            [
               'id' => 11,
               'country' => '韓国',
               'created_at' => Now()
            ],
            [
               'id' => 12,
                'country' => '中国',
                'created_at' => Now()
            ],
            [
               'id' => 13,
               'country' => '香港',
               'created_at' => Now()
            ],
            [
               'id' => 15,
               'country' => 'その他',
               'created_at' => Now()
            ],
        ]);
    }
}
