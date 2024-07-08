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
                'genre_id' => 35 ,
                'movie_id' => 1 ,
                'created_at' => Now()
            ],
            [
                'genre_id' => 80,
                'movie_id' => 1,
                'created_at' => Now()
            ],
            [
                'genre_id' => 9648,
                'movie_id' => 1,
                'created_at' => Now()
            ],
            [
                'genre_id' => 28,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 878,
                'movie_id' => 2,
                'created_at' => Now()
            ],
            [
                'genre_id' => 18,
                'movie_id' => 3,
                'created_at' => Now()
            ],
            [
                'genre_id' => 36,
                'movie_id' => 3,
                'created_at' => Now()
            ],
            [
                'genre_id' => 10752,
                'movie_id' => 3,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 4,
                'created_at' => Now()
            ],
            [
                'genre_id' => 14,
                'movie_id' => 4,
                'created_at' => Now()
            ],
            [
                'genre_id' => 16,
                'movie_id' => 5,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 5,
                'created_at' => Now()
            ],
            [
                'genre_id' => 10751,
                'movie_id' => 5,
                'created_at' => Now()
            ],
            [
                'genre_id' => 35,
                'movie_id' => 5,
                'created_at' => Now()
            ],
            [
                'genre_id' => 878,
                'movie_id' => 6,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 6,
                'created_at' => Now()
            ],
            [
                'genre_id' => 28,
                'movie_id' => 6,
                'created_at' => Now()
            ],
            [
                'genre_id' => 16,
                'movie_id' => 7,
                'created_at' => Now()
            ],
            [
                'genre_id' => 10751,
                'movie_id' => 7,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 7,
                'created_at' => Now()
            ],
            [
                'genre_id' => 878,
                'movie_id' => 8,
                'created_at' => Now()
            ],
            [
                'genre_id' => 28,
                'movie_id' => 8,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 8,
                'created_at' => Now()
            ],
            [
                'genre_id' => 878,
                'movie_id' => 9,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 9,
                'created_at' => Now()
            ],
            [
                'genre_id' => 16,
                'movie_id' => 10,
                'created_at' => Now()
            ],
            [
                'genre_id' => 28,
                'movie_id' => 10,
                'created_at' => Now()
            ],
            [
                'genre_id' => 12,
                'movie_id' => 10,
                'created_at' => Now()
            ],


        ]);
    }
}
