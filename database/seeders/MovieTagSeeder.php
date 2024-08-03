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
                'movie_id' => 1,
                'tag_id' => 2,
                'user_id' => 1,
                'created_at' => Now()
            ],
            [
                'movie_id' => 1,
                'tag_id' => 8,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'tag_id' => 4,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'tag_id' => 11,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'tag_id' => 17,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'tag_id' => 5,
                'user_id' => 1,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'tag_id' => 14,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 4,
                'tag_id' => 11,
                'user_id' => 1,
                'created_at' => Now()
            ],
            [
                'movie_id' => 4,
                'tag_id' => 15,
                'user_id' => 1,
                'created_at' => Now()
            ],
            [
                'movie_id' => 5,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 5,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'tag_id' => 17,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 1,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'tag_id' => 14,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 4,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 4,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 25,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 26,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 26,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 26,
                'tag_id' => 17,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 31,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 31,
                'tag_id' => 16,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 31,
                'tag_id' => 18,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 33,
                'tag_id' => 8,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 33,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 43,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 43,
                'tag_id' => 18,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 43,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 69,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 69,
                'tag_id' => 22,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 70,
                'tag_id' => 1,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 70,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 71,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 71,
                'tag_id' => 4,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 72,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 72,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 66,
                'tag_id' => 12,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 66,
                'tag_id' => 14,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 66,
                'tag_id' => 16,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 67,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 67,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 67,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => Now()
            ]
        ]);
    }
}
