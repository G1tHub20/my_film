<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie')->insert([
            [
                'genre_id' => 10 ,
                'movie_id' => 1 ,
                'created_at' => Now()
            ],
            [
                'genre_id' => 19,
                'movie_id' => 1,
                'created_at' => Now()
            ],
            [
                'genre_id' => 11,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 13,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 2,
                'movie_id' => 4,
                'created_at' => Now()
            ],
            [
                'genre_id' => 5,
                'movie_id' => 4,
                'created_at' => Now()
            ],
        ]);
    }
}
