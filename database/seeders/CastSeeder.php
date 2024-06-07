<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casts')->insert([
            [
               'cast' => '阿部寛' ,
               'created_at' => Now()
            ],
            [
                'cast' => '佐藤健' ,
                'created_at' => Now()
            ],
            [
                'cast' => '松たか子' ,
                'created_at' => Now()
            ],
            [
                'cast' => '黒木瞳' ,
                'created_at' => Now()
            ]
        ]);
    }
}
