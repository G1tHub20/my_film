<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cast_movie')->insert([
            [
            'cast_id' => 1 ,
            'movie_id' => 1 ,
            'created_at' => Now()
            ],
        ]);
    }
}
