<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_tag')->insert([
            [
                'movie_id' => 1 ,
                'tag_id' => 2 ,
                'created_at' => Now()
            ],
            [
                'movie_id' => 1 ,
                'tag_id' => 8 ,
                'created_at' => Now()
            ],
            [
                'movie_id' => 1 ,
                'tag_id' => 11 ,
                'created_at' => Now()
            ],
        ]);
    }
}
