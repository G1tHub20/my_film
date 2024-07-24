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
                'tag_id' => 2,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 5,
                'tag_id' => 7,
                'user_id' => 1,
                'created_at' => Now()
            ],
            [
                'movie_id' => 5,
                'tag_id' => 10,
                'user_id' => 2,
                'created_at' => Now()
            ],
            [
                'movie_id' => 5,
                'tag_id' => 15,
                'user_id' => 1,
                'created_at' => Now()
            ],
        ]);
    }
}
