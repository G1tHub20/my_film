<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genre_movie')->delete();
        
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_id' => 35,
                'movie_id' => 1,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            1 => 
            array (
                'id' => 2,
                'genre_id' => 80,
                'movie_id' => 1,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            2 => 
            array (
                'id' => 3,
                'genre_id' => 9648,
                'movie_id' => 1,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            3 => 
            array (
                'id' => 4,
                'genre_id' => 28,
                'movie_id' => 2,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            4 => 
            array (
                'id' => 5,
                'genre_id' => 12,
                'movie_id' => 2,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            5 => 
            array (
                'id' => 6,
                'genre_id' => 878,
                'movie_id' => 2,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            6 => 
            array (
                'id' => 7,
                'genre_id' => 18,
                'movie_id' => 3,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            7 => 
            array (
                'id' => 8,
                'genre_id' => 36,
                'movie_id' => 3,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            8 => 
            array (
                'id' => 9,
                'genre_id' => 10752,
                'movie_id' => 3,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            9 => 
            array (
                'id' => 10,
                'genre_id' => 12,
                'movie_id' => 4,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            10 => 
            array (
                'id' => 11,
                'genre_id' => 14,
                'movie_id' => 4,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            11 => 
            array (
                'id' => 12,
                'genre_id' => 16,
                'movie_id' => 5,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            12 => 
            array (
                'id' => 13,
                'genre_id' => 12,
                'movie_id' => 5,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            13 => 
            array (
                'id' => 14,
                'genre_id' => 10751,
                'movie_id' => 5,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            14 => 
            array (
                'id' => 15,
                'genre_id' => 35,
                'movie_id' => 5,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            15 => 
            array (
                'id' => 16,
                'genre_id' => 18,
                'movie_id' => 6,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            16 => 
            array (
                'id' => 17,
                'genre_id' => 10749,
                'movie_id' => 6,
                'created_at' => '2024-07-17 21:09:01',
                'updated_at' => '2024-07-17 21:09:01',
            ),
            17 => 
            array (
                'id' => 18,
                'genre_id' => 14,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:09:01',
                'updated_at' => '2024-07-18 21:09:01',
            ),
            18 => 
            array (
                'id' => 19,
                'genre_id' => 12,
                'movie_id' => 10749,
                'created_at' => '2024-07-18 21:09:01',
                'updated_at' => '2024-07-18 21:09:01',
            ),
            19 => 
            array (
                'id' => 20,
                'genre_id' => 35,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            20 => 
            array (
                'id' => 21,
                'genre_id' => 53,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            21 => 
            array (
                'id' => 22,
                'genre_id' => 18,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            22 => 
            array (
                'id' => 23,
                'genre_id' => 28,
                'movie_id' => 8,
                'created_at' => '2024-07-18 21:09:12',
                'updated_at' => '2024-07-18 21:09:12',
            ),
            23 => 
            array (
                'id' => 24,
                'genre_id' => 878,
                'movie_id' => 8,
                'created_at' => '2024-07-18 21:09:12',
                'updated_at' => '2024-07-18 21:09:12',
            ),
            24 => 
            array (
                'id' => 25,
                'genre_id' => 53,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            25 => 
            array (
                'id' => 26,
                'genre_id' => 28,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            26 => 
            array (
                'id' => 27,
                'genre_id' => 80,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            27 => 
            array (
                'id' => 28,
                'genre_id' => 18,
                'movie_id' => 10,
                'created_at' => '2024-07-18 21:09:19',
                'updated_at' => '2024-07-18 21:09:19',
            ),
            28 => 
            array (
                'id' => 29,
                'genre_id' => 12,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            29 => 
            array (
                'id' => 30,
                'genre_id' => 28,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            30 => 
            array (
                'id' => 31,
                'genre_id' => 878,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            31 => 
            array (
                'id' => 32,
                'genre_id' => 878,
                'movie_id' => 12,
                'created_at' => '2024-07-18 21:09:34',
                'updated_at' => '2024-07-18 21:09:34',
            ),
            32 => 
            array (
                'id' => 33,
                'genre_id' => 18,
                'movie_id' => 12,
                'created_at' => '2024-07-18 21:09:34',
                'updated_at' => '2024-07-18 21:09:34',
            ),
            33 => 
            array (
                'id' => 34,
                'genre_id' => 18,
                'movie_id' => 13,
                'created_at' => '2024-07-18 21:09:36',
                'updated_at' => '2024-07-18 21:09:36',
            ),
            34 => 
            array (
                'id' => 35,
                'genre_id' => 16,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            35 => 
            array (
                'id' => 36,
                'genre_id' => 10751,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            36 => 
            array (
                'id' => 37,
                'genre_id' => 12,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            37 => 
            array (
                'id' => 38,
                'genre_id' => 18,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            38 => 
            array (
                'id' => 39,
                'genre_id' => 35,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            39 => 
            array (
                'id' => 40,
                'genre_id' => 878,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            40 => 
            array (
                'id' => 41,
                'genre_id' => 28,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            41 => 
            array (
                'id' => 42,
                'genre_id' => 18,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            42 => 
            array (
                'id' => 43,
                'genre_id' => 53,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            43 => 
            array (
                'id' => 44,
                'genre_id' => 16,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:48',
                'updated_at' => '2024-07-18 21:09:48',
            ),
            44 => 
            array (
                'id' => 45,
                'genre_id' => 35,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:48',
                'updated_at' => '2024-07-18 21:09:48',
            ),
            45 => 
            array (
                'id' => 46,
                'genre_id' => 10751,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:49',
                'updated_at' => '2024-07-18 21:09:49',
            ),
            46 => 
            array (
                'id' => 47,
                'genre_id' => 27,
                'movie_id' => 17,
                'created_at' => '2024-07-18 21:09:59',
                'updated_at' => '2024-07-18 21:09:59',
            ),
            47 => 
            array (
                'id' => 48,
                'genre_id' => 53,
                'movie_id' => 17,
                'created_at' => '2024-07-18 21:09:59',
                'updated_at' => '2024-07-18 21:09:59',
            ),
            48 => 
            array (
                'id' => 49,
                'genre_id' => 28,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            49 => 
            array (
                'id' => 50,
                'genre_id' => 53,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            50 => 
            array (
                'id' => 51,
                'genre_id' => 878,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            51 => 
            array (
                'id' => 52,
                'genre_id' => 12,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            52 => 
            array (
                'id' => 53,
                'genre_id' => 28,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            53 => 
            array (
                'id' => 54,
                'genre_id' => 878,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            54 => 
            array (
                'id' => 55,
                'genre_id' => 16,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            55 => 
            array (
                'id' => 56,
                'genre_id' => 10751,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            56 => 
            array (
                'id' => 57,
                'genre_id' => 14,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            57 => 
            array (
                'id' => 58,
                'genre_id' => 14,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            58 => 
            array (
                'id' => 59,
                'genre_id' => 18,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            59 => 
            array (
                'id' => 60,
                'genre_id' => 10749,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            60 => 
            array (
                'id' => 61,
                'genre_id' => 27,
                'movie_id' => 22,
                'created_at' => '2024-07-18 21:10:21',
                'updated_at' => '2024-07-18 21:10:21',
            ),
            61 => 
            array (
                'id' => 62,
                'genre_id' => 18,
                'movie_id' => 23,
                'created_at' => '2024-07-18 21:10:24',
                'updated_at' => '2024-07-18 21:10:24',
            ),
            62 => 
            array (
                'id' => 63,
                'genre_id' => 35,
                'movie_id' => 23,
                'created_at' => '2024-07-18 21:10:24',
                'updated_at' => '2024-07-18 21:10:24',
            ),
            63 => 
            array (
                'id' => 64,
                'genre_id' => 12,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            64 => 
            array (
                'id' => 65,
                'genre_id' => 10751,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            65 => 
            array (
                'id' => 66,
                'genre_id' => 14,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            66 => 
            array (
                'id' => 67,
                'genre_id' => 14,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            67 => 
            array (
                'id' => 68,
                'genre_id' => 16,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            68 => 
            array (
                'id' => 69,
                'genre_id' => 12,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            69 => 
            array (
                'id' => 70,
                'genre_id' => 12,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            70 => 
            array (
                'id' => 71,
                'genre_id' => 14,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            71 => 
            array (
                'id' => 72,
                'genre_id' => 28,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            72 => 
            array (
                'id' => 73,
                'genre_id' => 28,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            73 => 
            array (
                'id' => 74,
                'genre_id' => 12,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            74 => 
            array (
                'id' => 75,
                'genre_id' => 53,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            75 => 
            array (
                'id' => 76,
                'genre_id' => 80,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            76 => 
            array (
                'id' => 77,
                'genre_id' => 28,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            77 => 
            array (
                'id' => 78,
                'genre_id' => 18,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            78 => 
            array (
                'id' => 79,
                'genre_id' => 12,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            79 => 
            array (
                'id' => 80,
                'genre_id' => 16,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            80 => 
            array (
                'id' => 81,
                'genre_id' => 35,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            81 => 
            array (
                'id' => 82,
                'genre_id' => 10751,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            82 => 
            array (
                'id' => 83,
                'genre_id' => 16,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:10:59',
                'updated_at' => '2024-07-18 21:10:59',
            ),
            83 => 
            array (
                'id' => 84,
                'genre_id' => 10751,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:10:59',
                'updated_at' => '2024-07-18 21:10:59',
            ),
            84 => 
            array (
                'id' => 85,
                'genre_id' => 12,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:11:00',
                'updated_at' => '2024-07-18 21:11:00',
            ),
            85 => 
            array (
                'id' => 86,
                'genre_id' => 18,
                'movie_id' => 31,
                'created_at' => '2024-07-18 21:11:03',
                'updated_at' => '2024-07-18 21:11:03',
            ),
            86 => 
            array (
                'id' => 87,
                'genre_id' => 10749,
                'movie_id' => 31,
                'created_at' => '2024-07-18 21:11:03',
                'updated_at' => '2024-07-18 21:11:03',
            ),
            87 => 
            array (
                'id' => 88,
                'genre_id' => 28,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            88 => 
            array (
                'id' => 89,
                'genre_id' => 12,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            89 => 
            array (
                'id' => 90,
                'genre_id' => 18,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            90 => 
            array (
                'id' => 91,
                'genre_id' => 80,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            91 => 
            array (
                'id' => 92,
                'genre_id' => 9648,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            92 => 
            array (
                'id' => 93,
                'genre_id' => 53,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            93 => 
            array (
                'id' => 94,
                'genre_id' => 80,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            94 => 
            array (
                'id' => 95,
                'genre_id' => 18,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            95 => 
            array (
                'id' => 96,
                'genre_id' => 28,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            96 => 
            array (
                'id' => 97,
                'genre_id' => 35,
                'movie_id' => 35,
                'created_at' => '2024-07-18 21:11:17',
                'updated_at' => '2024-07-18 21:11:17',
            ),
            97 => 
            array (
                'id' => 98,
                'genre_id' => 10749,
                'movie_id' => 35,
                'created_at' => '2024-07-18 21:11:17',
                'updated_at' => '2024-07-18 21:11:17',
            ),
            98 => 
            array (
                'id' => 99,
                'genre_id' => 14,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            99 => 
            array (
                'id' => 100,
                'genre_id' => 18,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            100 => 
            array (
                'id' => 101,
                'genre_id' => 35,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            101 => 
            array (
                'id' => 102,
                'genre_id' => 10752,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            102 => 
            array (
                'id' => 103,
                'genre_id' => 18,
                'movie_id' => 37,
                'created_at' => '2024-07-18 21:11:23',
                'updated_at' => '2024-07-18 21:11:23',
            ),
            103 => 
            array (
                'id' => 104,
                'genre_id' => 80,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            104 => 
            array (
                'id' => 105,
                'genre_id' => 18,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            105 => 
            array (
                'id' => 106,
                'genre_id' => 53,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            106 => 
            array (
                'id' => 107,
                'genre_id' => 16,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            107 => 
            array (
                'id' => 108,
                'genre_id' => 10751,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            108 => 
            array (
                'id' => 109,
                'genre_id' => 14,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            109 => 
            array (
                'id' => 110,
                'genre_id' => 878,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            110 => 
            array (
                'id' => 111,
                'genre_id' => 18,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            111 => 
            array (
                'id' => 112,
                'genre_id' => 14,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            112 => 
            array (
                'id' => 113,
                'genre_id' => 10749,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            113 => 
            array (
                'id' => 114,
                'genre_id' => 27,
                'movie_id' => 41,
                'created_at' => '2024-07-18 21:11:43',
                'updated_at' => '2024-07-18 21:11:43',
            ),
            114 => 
            array (
                'id' => 115,
                'genre_id' => 18,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            115 => 
            array (
                'id' => 116,
                'genre_id' => 28,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            116 => 
            array (
                'id' => 117,
                'genre_id' => 12,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            117 => 
            array (
                'id' => 118,
                'genre_id' => 12,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            118 => 
            array (
                'id' => 119,
                'genre_id' => 35,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            119 => 
            array (
                'id' => 120,
                'genre_id' => 878,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            120 => 
            array (
                'id' => 121,
                'genre_id' => 35,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            121 => 
            array (
                'id' => 122,
                'genre_id' => 80,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            122 => 
            array (
                'id' => 123,
                'genre_id' => 28,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            123 => 
            array (
                'id' => 124,
                'genre_id' => 35,
                'movie_id' => 45,
                'created_at' => '2024-07-18 21:12:01',
                'updated_at' => '2024-07-18 21:12:01',
            ),
            124 => 
            array (
                'id' => 125,
                'genre_id' => 27,
                'movie_id' => 46,
                'created_at' => '2024-07-18 21:12:05',
                'updated_at' => '2024-07-18 21:12:05',
            ),
            125 => 
            array (
                'id' => 126,
                'genre_id' => 53,
                'movie_id' => 46,
                'created_at' => '2024-07-18 21:12:05',
                'updated_at' => '2024-07-18 21:12:05',
            ),
            126 => 
            array (
                'id' => 127,
                'genre_id' => 12,
                'movie_id' => 47,
                'created_at' => '2024-07-18 21:12:08',
                'updated_at' => '2024-07-18 21:12:08',
            ),
            127 => 
            array (
                'id' => 128,
                'genre_id' => 28,
                'movie_id' => 47,
                'created_at' => '2024-07-18 21:12:08',
                'updated_at' => '2024-07-18 21:12:08',
            ),
            128 => 
            array (
                'id' => 129,
                'genre_id' => 27,
                'movie_id' => 48,
                'created_at' => '2024-07-18 21:12:13',
                'updated_at' => '2024-07-18 21:12:13',
            ),
            129 => 
            array (
                'id' => 130,
                'genre_id' => 53,
                'movie_id' => 48,
                'created_at' => '2024-07-18 21:12:13',
                'updated_at' => '2024-07-18 21:12:13',
            ),
            130 => 
            array (
                'id' => 131,
                'genre_id' => 27,
                'movie_id' => 49,
                'created_at' => '2024-07-18 21:12:16',
                'updated_at' => '2024-07-18 21:12:16',
            ),
            131 => 
            array (
                'id' => 132,
                'genre_id' => 878,
                'movie_id' => 49,
                'created_at' => '2024-07-18 21:12:16',
                'updated_at' => '2024-07-18 21:12:16',
            ),
            132 => 
            array (
                'id' => 133,
                'genre_id' => 27,
                'movie_id' => 50,
                'created_at' => '2024-07-18 21:12:20',
                'updated_at' => '2024-07-18 21:12:20',
            ),
            133 => 
            array (
                'id' => 134,
                'genre_id' => 12,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            134 => 
            array (
                'id' => 135,
                'genre_id' => 28,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            135 => 
            array (
                'id' => 136,
                'genre_id' => 878,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            136 => 
            array (
                'id' => 137,
                'genre_id' => 18,
                'movie_id' => 52,
                'created_at' => '2024-07-18 21:12:27',
                'updated_at' => '2024-07-18 21:12:27',
            ),
            137 => 
            array (
                'id' => 138,
                'genre_id' => 10749,
                'movie_id' => 52,
                'created_at' => '2024-07-18 21:12:27',
                'updated_at' => '2024-07-18 21:12:27',
            ),
            138 => 
            array (
                'id' => 139,
                'genre_id' => 27,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            139 => 
            array (
                'id' => 140,
                'genre_id' => 53,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            140 => 
            array (
                'id' => 141,
                'genre_id' => 12,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            141 => 
            array (
                'id' => 142,
                'genre_id' => 18,
                'movie_id' => 54,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            142 => 
            array (
                'id' => 143,
                'genre_id' => 36,
                'movie_id' => 54,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            143 => 
            array (
                'id' => 144,
                'genre_id' => 18,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            144 => 
            array (
                'id' => 145,
                'genre_id' => 9648,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            145 => 
            array (
                'id' => 146,
                'genre_id' => 80,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            146 => 
            array (
                'id' => 147,
                'genre_id' => 18,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            147 => 
            array (
                'id' => 148,
                'genre_id' => 28,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            148 => 
            array (
                'id' => 149,
                'genre_id' => 12,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            149 => 
            array (
                'id' => 150,
                'genre_id' => 36,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            150 => 
            array (
                'id' => 151,
                'genre_id' => 10752,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            151 => 
            array (
                'id' => 152,
                'genre_id' => 37,
                'movie_id' => 57,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            152 => 
            array (
                'id' => 153,
                'genre_id' => 18,
                'movie_id' => 57,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            153 => 
            array (
                'id' => 154,
                'genre_id' => 37,
                'movie_id' => 58,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            154 => 
            array (
                'id' => 155,
                'genre_id' => 37,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            155 => 
            array (
                'id' => 156,
                'genre_id' => 53,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            156 => 
            array (
                'id' => 157,
                'genre_id' => 28,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:48',
                'updated_at' => '2024-07-18 21:16:48',
            ),
            157 => 
            array (
                'id' => 158,
                'genre_id' => 18,
                'movie_id' => 60,
                'created_at' => '2024-07-18 21:16:57',
                'updated_at' => '2024-07-18 21:16:57',
            ),
            158 => 
            array (
                'id' => 159,
                'genre_id' => 10751,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            159 => 
            array (
                'id' => 160,
                'genre_id' => 10402,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            160 => 
            array (
                'id' => 161,
                'genre_id' => 12,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            161 => 
            array (
                'id' => 162,
                'genre_id' => 35,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            162 => 
            array (
                'id' => 163,
                'genre_id' => 14,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            163 => 
            array (
                'id' => 164,
                'genre_id' => 10770,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            164 => 
            array (
                'id' => 165,
                'genre_id' => 18,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            165 => 
            array (
                'id' => 166,
                'genre_id' => 9648,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            166 => 
            array (
                'id' => 167,
                'genre_id' => 53,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            167 => 
            array (
                'id' => 168,
                'genre_id' => 80,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            168 => 
            array (
                'id' => 169,
                'genre_id' => 10752,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            169 => 
            array (
                'id' => 170,
                'genre_id' => 28,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            170 => 
            array (
                'id' => 171,
                'genre_id' => 18,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            171 => 
            array (
                'id' => 172,
                'genre_id' => 10752,
                'movie_id' => 64,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            172 => 
            array (
                'id' => 173,
                'genre_id' => 28,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            173 => 
            array (
                'id' => 174,
                'genre_id' => 14,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            174 => 
            array (
                'id' => 175,
                'genre_id' => 10752,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            175 => 
            array (
                'id' => 176,
                'genre_id' => 18,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            176 => 
            array (
                'id' => 177,
                'genre_id' => 80,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            177 => 
            array (
                'id' => 178,
                'genre_id' => 53,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            178 => 
            array (
                'id' => 179,
                'genre_id' => 14,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            179 => 
            array (
                'id' => 180,
                'genre_id' => 16,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            180 => 
            array (
                'id' => 181,
                'genre_id' => 10751,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            181 => 
            array (
                'id' => 182,
                'genre_id' => 12,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            182 => 
            array (
                'id' => 183,
                'genre_id' => 28,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            183 => 
            array (
                'id' => 184,
                'genre_id' => 53,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            184 => 
            array (
                'id' => 185,
                'genre_id' => 878,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            185 => 
            array (
                'id' => 186,
                'genre_id' => 18,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            186 => 
            array (
                'id' => 187,
                'genre_id' => 53,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            187 => 
            array (
                'id' => 188,
                'genre_id' => 9648,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            188 => 
            array (
                'id' => 189,
                'genre_id' => 18,
                'movie_id' => 70,
                'created_at' => '2024-07-20 20:15:03',
                'updated_at' => '2024-07-20 20:15:03',
            ),
            189 => 
            array (
                'id' => 190,
                'genre_id' => 28,
                'movie_id' => 71,
                'created_at' => '2024-07-20 20:17:18',
                'updated_at' => '2024-07-20 20:17:18',
            ),
            190 => 
            array (
                'id' => 191,
                'genre_id' => 35,
                'movie_id' => 71,
                'created_at' => '2024-07-20 20:17:18',
                'updated_at' => '2024-07-20 20:17:18',
            ),
            191 => 
            array (
                'id' => 192,
                'genre_id' => 18,
                'movie_id' => 72,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            192 => 
            array (
                'id' => 193,
                'genre_id' => 35,
                'movie_id' => 72,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            193 => 
            array (
                'id' => 194,
                'genre_id' => 18,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            194 => 
            array (
                'id' => 195,
                'genre_id' => 10402,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            195 => 
            array (
                'id' => 196,
                'genre_id' => 10749,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            196 => 
            array (
                'id' => 197,
                'genre_id' => 18,
                'movie_id' => 74,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            197 => 
            array (
                'id' => 198,
                'genre_id' => 18,
                'movie_id' => 75,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            198 => 
            array (
                'id' => 199,
                'genre_id' => 12,
                'movie_id' => 75,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            199 => 
            array (
                'id' => 200,
                'genre_id' => 28,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
            200 => 
            array (
                'id' => 201,
                'genre_id' => 12,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
            201 => 
            array (
                'id' => 202,
                'genre_id' => 53,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
        ));
        
        
    }
}