<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'トリック劇場版' ,
                'release_year' => 2002 ,
                'director_id' => 2 ,
                'distributor_id' => 1 ,
                'country_id' => 1 ,
                'created_at' => Now()
            ],
            [
                'title' => 'マッドマックス　フュリオサ' ,
                'release_year' => 2024 ,
                'director_id' => 1 ,
                'distributor_id' => 2 ,
                'country_id' => 2 ,
                'created_at' => Now()
            ],
            [
                'title' => 'てすとマッド' ,
                'release_year' => 1999 ,
                'director_id' => 2 ,
                'distributor_id' => 1 ,
                'country_id' => 1 ,
                'created_at' => Now()
            ],
        ]);
    }
}
