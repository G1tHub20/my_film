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
                'id' => 20,
                'genre_id' => 35,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            19 => 
            array (
                'id' => 21,
                'genre_id' => 53,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            20 => 
            array (
                'id' => 22,
                'genre_id' => 18,
                'movie_id' => 7,
                'created_at' => '2024-07-18 21:09:07',
                'updated_at' => '2024-07-18 21:09:07',
            ),
            21 => 
            array (
                'id' => 23,
                'genre_id' => 28,
                'movie_id' => 8,
                'created_at' => '2024-07-18 21:09:12',
                'updated_at' => '2024-07-18 21:09:12',
            ),
            22 => 
            array (
                'id' => 24,
                'genre_id' => 878,
                'movie_id' => 8,
                'created_at' => '2024-07-18 21:09:12',
                'updated_at' => '2024-07-18 21:09:12',
            ),
            23 => 
            array (
                'id' => 25,
                'genre_id' => 53,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            24 => 
            array (
                'id' => 26,
                'genre_id' => 28,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            25 => 
            array (
                'id' => 27,
                'genre_id' => 80,
                'movie_id' => 9,
                'created_at' => '2024-07-18 21:09:16',
                'updated_at' => '2024-07-18 21:09:16',
            ),
            26 => 
            array (
                'id' => 28,
                'genre_id' => 18,
                'movie_id' => 10,
                'created_at' => '2024-07-18 21:09:19',
                'updated_at' => '2024-07-18 21:09:19',
            ),
            27 => 
            array (
                'id' => 29,
                'genre_id' => 12,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            28 => 
            array (
                'id' => 30,
                'genre_id' => 28,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            29 => 
            array (
                'id' => 31,
                'genre_id' => 878,
                'movie_id' => 11,
                'created_at' => '2024-07-18 21:09:24',
                'updated_at' => '2024-07-18 21:09:24',
            ),
            30 => 
            array (
                'id' => 32,
                'genre_id' => 878,
                'movie_id' => 12,
                'created_at' => '2024-07-18 21:09:34',
                'updated_at' => '2024-07-18 21:09:34',
            ),
            31 => 
            array (
                'id' => 33,
                'genre_id' => 18,
                'movie_id' => 12,
                'created_at' => '2024-07-18 21:09:34',
                'updated_at' => '2024-07-18 21:09:34',
            ),
            32 => 
            array (
                'id' => 34,
                'genre_id' => 18,
                'movie_id' => 13,
                'created_at' => '2024-07-18 21:09:36',
                'updated_at' => '2024-07-18 21:09:36',
            ),
            33 => 
            array (
                'id' => 35,
                'genre_id' => 16,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            34 => 
            array (
                'id' => 36,
                'genre_id' => 10751,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            35 => 
            array (
                'id' => 37,
                'genre_id' => 12,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            36 => 
            array (
                'id' => 38,
                'genre_id' => 18,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            37 => 
            array (
                'id' => 39,
                'genre_id' => 35,
                'movie_id' => 14,
                'created_at' => '2024-07-18 21:09:40',
                'updated_at' => '2024-07-18 21:09:40',
            ),
            38 => 
            array (
                'id' => 40,
                'genre_id' => 878,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            39 => 
            array (
                'id' => 41,
                'genre_id' => 28,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            40 => 
            array (
                'id' => 42,
                'genre_id' => 18,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            41 => 
            array (
                'id' => 43,
                'genre_id' => 53,
                'movie_id' => 15,
                'created_at' => '2024-07-18 21:09:46',
                'updated_at' => '2024-07-18 21:09:46',
            ),
            42 => 
            array (
                'id' => 44,
                'genre_id' => 16,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:48',
                'updated_at' => '2024-07-18 21:09:48',
            ),
            43 => 
            array (
                'id' => 45,
                'genre_id' => 35,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:48',
                'updated_at' => '2024-07-18 21:09:48',
            ),
            44 => 
            array (
                'id' => 46,
                'genre_id' => 10751,
                'movie_id' => 16,
                'created_at' => '2024-07-18 21:09:49',
                'updated_at' => '2024-07-18 21:09:49',
            ),
            45 => 
            array (
                'id' => 47,
                'genre_id' => 27,
                'movie_id' => 17,
                'created_at' => '2024-07-18 21:09:59',
                'updated_at' => '2024-07-18 21:09:59',
            ),
            46 => 
            array (
                'id' => 48,
                'genre_id' => 53,
                'movie_id' => 17,
                'created_at' => '2024-07-18 21:09:59',
                'updated_at' => '2024-07-18 21:09:59',
            ),
            47 => 
            array (
                'id' => 49,
                'genre_id' => 28,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            48 => 
            array (
                'id' => 50,
                'genre_id' => 53,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            49 => 
            array (
                'id' => 51,
                'genre_id' => 878,
                'movie_id' => 18,
                'created_at' => '2024-07-18 21:10:06',
                'updated_at' => '2024-07-18 21:10:06',
            ),
            50 => 
            array (
                'id' => 52,
                'genre_id' => 12,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            51 => 
            array (
                'id' => 53,
                'genre_id' => 28,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            52 => 
            array (
                'id' => 54,
                'genre_id' => 878,
                'movie_id' => 19,
                'created_at' => '2024-07-18 21:10:09',
                'updated_at' => '2024-07-18 21:10:09',
            ),
            53 => 
            array (
                'id' => 55,
                'genre_id' => 16,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            54 => 
            array (
                'id' => 56,
                'genre_id' => 10751,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            55 => 
            array (
                'id' => 57,
                'genre_id' => 14,
                'movie_id' => 20,
                'created_at' => '2024-07-18 21:10:12',
                'updated_at' => '2024-07-18 21:10:12',
            ),
            56 => 
            array (
                'id' => 58,
                'genre_id' => 14,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            57 => 
            array (
                'id' => 59,
                'genre_id' => 18,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            58 => 
            array (
                'id' => 60,
                'genre_id' => 10749,
                'movie_id' => 21,
                'created_at' => '2024-07-18 21:10:16',
                'updated_at' => '2024-07-18 21:10:16',
            ),
            59 => 
            array (
                'id' => 61,
                'genre_id' => 27,
                'movie_id' => 22,
                'created_at' => '2024-07-18 21:10:21',
                'updated_at' => '2024-07-18 21:10:21',
            ),
            60 => 
            array (
                'id' => 62,
                'genre_id' => 18,
                'movie_id' => 23,
                'created_at' => '2024-07-18 21:10:24',
                'updated_at' => '2024-07-18 21:10:24',
            ),
            61 => 
            array (
                'id' => 63,
                'genre_id' => 35,
                'movie_id' => 23,
                'created_at' => '2024-07-18 21:10:24',
                'updated_at' => '2024-07-18 21:10:24',
            ),
            62 => 
            array (
                'id' => 64,
                'genre_id' => 12,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            63 => 
            array (
                'id' => 65,
                'genre_id' => 10751,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            64 => 
            array (
                'id' => 66,
                'genre_id' => 14,
                'movie_id' => 24,
                'created_at' => '2024-07-18 21:10:29',
                'updated_at' => '2024-07-18 21:10:29',
            ),
            65 => 
            array (
                'id' => 67,
                'genre_id' => 14,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            66 => 
            array (
                'id' => 68,
                'genre_id' => 16,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            67 => 
            array (
                'id' => 69,
                'genre_id' => 12,
                'movie_id' => 25,
                'created_at' => '2024-07-18 21:10:32',
                'updated_at' => '2024-07-18 21:10:32',
            ),
            68 => 
            array (
                'id' => 70,
                'genre_id' => 12,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            69 => 
            array (
                'id' => 71,
                'genre_id' => 14,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            70 => 
            array (
                'id' => 72,
                'genre_id' => 28,
                'movie_id' => 26,
                'created_at' => '2024-07-18 21:10:36',
                'updated_at' => '2024-07-18 21:10:36',
            ),
            71 => 
            array (
                'id' => 73,
                'genre_id' => 28,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            72 => 
            array (
                'id' => 74,
                'genre_id' => 12,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            73 => 
            array (
                'id' => 75,
                'genre_id' => 53,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            74 => 
            array (
                'id' => 76,
                'genre_id' => 80,
                'movie_id' => 27,
                'created_at' => '2024-07-18 21:10:40',
                'updated_at' => '2024-07-18 21:10:40',
            ),
            75 => 
            array (
                'id' => 77,
                'genre_id' => 28,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            76 => 
            array (
                'id' => 78,
                'genre_id' => 18,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            77 => 
            array (
                'id' => 79,
                'genre_id' => 12,
                'movie_id' => 28,
                'created_at' => '2024-07-18 21:10:48',
                'updated_at' => '2024-07-18 21:10:48',
            ),
            78 => 
            array (
                'id' => 80,
                'genre_id' => 16,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            79 => 
            array (
                'id' => 81,
                'genre_id' => 35,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            80 => 
            array (
                'id' => 82,
                'genre_id' => 10751,
                'movie_id' => 29,
                'created_at' => '2024-07-18 21:10:57',
                'updated_at' => '2024-07-18 21:10:57',
            ),
            81 => 
            array (
                'id' => 83,
                'genre_id' => 16,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:10:59',
                'updated_at' => '2024-07-18 21:10:59',
            ),
            82 => 
            array (
                'id' => 84,
                'genre_id' => 10751,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:10:59',
                'updated_at' => '2024-07-18 21:10:59',
            ),
            83 => 
            array (
                'id' => 85,
                'genre_id' => 12,
                'movie_id' => 30,
                'created_at' => '2024-07-18 21:11:00',
                'updated_at' => '2024-07-18 21:11:00',
            ),
            84 => 
            array (
                'id' => 86,
                'genre_id' => 18,
                'movie_id' => 31,
                'created_at' => '2024-07-18 21:11:03',
                'updated_at' => '2024-07-18 21:11:03',
            ),
            85 => 
            array (
                'id' => 87,
                'genre_id' => 10749,
                'movie_id' => 31,
                'created_at' => '2024-07-18 21:11:03',
                'updated_at' => '2024-07-18 21:11:03',
            ),
            86 => 
            array (
                'id' => 88,
                'genre_id' => 28,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            87 => 
            array (
                'id' => 89,
                'genre_id' => 12,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            88 => 
            array (
                'id' => 90,
                'genre_id' => 18,
                'movie_id' => 32,
                'created_at' => '2024-07-18 21:11:07',
                'updated_at' => '2024-07-18 21:11:07',
            ),
            89 => 
            array (
                'id' => 91,
                'genre_id' => 80,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            90 => 
            array (
                'id' => 92,
                'genre_id' => 9648,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            91 => 
            array (
                'id' => 93,
                'genre_id' => 53,
                'movie_id' => 33,
                'created_at' => '2024-07-18 21:11:10',
                'updated_at' => '2024-07-18 21:11:10',
            ),
            92 => 
            array (
                'id' => 94,
                'genre_id' => 80,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            93 => 
            array (
                'id' => 95,
                'genre_id' => 18,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            94 => 
            array (
                'id' => 96,
                'genre_id' => 28,
                'movie_id' => 34,
                'created_at' => '2024-07-18 21:11:14',
                'updated_at' => '2024-07-18 21:11:14',
            ),
            95 => 
            array (
                'id' => 97,
                'genre_id' => 35,
                'movie_id' => 35,
                'created_at' => '2024-07-18 21:11:17',
                'updated_at' => '2024-07-18 21:11:17',
            ),
            96 => 
            array (
                'id' => 98,
                'genre_id' => 10749,
                'movie_id' => 35,
                'created_at' => '2024-07-18 21:11:17',
                'updated_at' => '2024-07-18 21:11:17',
            ),
            97 => 
            array (
                'id' => 99,
                'genre_id' => 14,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            98 => 
            array (
                'id' => 100,
                'genre_id' => 18,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            99 => 
            array (
                'id' => 101,
                'genre_id' => 35,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            100 => 
            array (
                'id' => 102,
                'genre_id' => 10752,
                'movie_id' => 36,
                'created_at' => '2024-07-18 21:11:20',
                'updated_at' => '2024-07-18 21:11:20',
            ),
            101 => 
            array (
                'id' => 103,
                'genre_id' => 18,
                'movie_id' => 37,
                'created_at' => '2024-07-18 21:11:23',
                'updated_at' => '2024-07-18 21:11:23',
            ),
            102 => 
            array (
                'id' => 104,
                'genre_id' => 80,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            103 => 
            array (
                'id' => 105,
                'genre_id' => 18,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            104 => 
            array (
                'id' => 106,
                'genre_id' => 53,
                'movie_id' => 38,
                'created_at' => '2024-07-18 21:11:28',
                'updated_at' => '2024-07-18 21:11:28',
            ),
            105 => 
            array (
                'id' => 107,
                'genre_id' => 16,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            106 => 
            array (
                'id' => 108,
                'genre_id' => 10751,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            107 => 
            array (
                'id' => 109,
                'genre_id' => 14,
                'movie_id' => 39,
                'created_at' => '2024-07-18 21:11:37',
                'updated_at' => '2024-07-18 21:11:37',
            ),
            108 => 
            array (
                'id' => 110,
                'genre_id' => 878,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            109 => 
            array (
                'id' => 111,
                'genre_id' => 18,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            110 => 
            array (
                'id' => 112,
                'genre_id' => 14,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            111 => 
            array (
                'id' => 113,
                'genre_id' => 10749,
                'movie_id' => 40,
                'created_at' => '2024-07-18 21:11:40',
                'updated_at' => '2024-07-18 21:11:40',
            ),
            112 => 
            array (
                'id' => 114,
                'genre_id' => 27,
                'movie_id' => 41,
                'created_at' => '2024-07-18 21:11:43',
                'updated_at' => '2024-07-18 21:11:43',
            ),
            113 => 
            array (
                'id' => 115,
                'genre_id' => 18,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            114 => 
            array (
                'id' => 116,
                'genre_id' => 28,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            115 => 
            array (
                'id' => 117,
                'genre_id' => 12,
                'movie_id' => 42,
                'created_at' => '2024-07-18 21:11:48',
                'updated_at' => '2024-07-18 21:11:48',
            ),
            116 => 
            array (
                'id' => 118,
                'genre_id' => 12,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            117 => 
            array (
                'id' => 119,
                'genre_id' => 35,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            118 => 
            array (
                'id' => 120,
                'genre_id' => 878,
                'movie_id' => 43,
                'created_at' => '2024-07-18 21:11:54',
                'updated_at' => '2024-07-18 21:11:54',
            ),
            119 => 
            array (
                'id' => 121,
                'genre_id' => 35,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            120 => 
            array (
                'id' => 122,
                'genre_id' => 80,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            121 => 
            array (
                'id' => 123,
                'genre_id' => 28,
                'movie_id' => 44,
                'created_at' => '2024-07-18 21:11:58',
                'updated_at' => '2024-07-18 21:11:58',
            ),
            122 => 
            array (
                'id' => 124,
                'genre_id' => 35,
                'movie_id' => 45,
                'created_at' => '2024-07-18 21:12:01',
                'updated_at' => '2024-07-18 21:12:01',
            ),
            123 => 
            array (
                'id' => 125,
                'genre_id' => 27,
                'movie_id' => 46,
                'created_at' => '2024-07-18 21:12:05',
                'updated_at' => '2024-07-18 21:12:05',
            ),
            124 => 
            array (
                'id' => 126,
                'genre_id' => 53,
                'movie_id' => 46,
                'created_at' => '2024-07-18 21:12:05',
                'updated_at' => '2024-07-18 21:12:05',
            ),
            125 => 
            array (
                'id' => 127,
                'genre_id' => 12,
                'movie_id' => 47,
                'created_at' => '2024-07-18 21:12:08',
                'updated_at' => '2024-07-18 21:12:08',
            ),
            126 => 
            array (
                'id' => 128,
                'genre_id' => 28,
                'movie_id' => 47,
                'created_at' => '2024-07-18 21:12:08',
                'updated_at' => '2024-07-18 21:12:08',
            ),
            127 => 
            array (
                'id' => 129,
                'genre_id' => 27,
                'movie_id' => 48,
                'created_at' => '2024-07-18 21:12:13',
                'updated_at' => '2024-07-18 21:12:13',
            ),
            128 => 
            array (
                'id' => 130,
                'genre_id' => 53,
                'movie_id' => 48,
                'created_at' => '2024-07-18 21:12:13',
                'updated_at' => '2024-07-18 21:12:13',
            ),
            129 => 
            array (
                'id' => 131,
                'genre_id' => 27,
                'movie_id' => 49,
                'created_at' => '2024-07-18 21:12:16',
                'updated_at' => '2024-07-18 21:12:16',
            ),
            130 => 
            array (
                'id' => 132,
                'genre_id' => 878,
                'movie_id' => 49,
                'created_at' => '2024-07-18 21:12:16',
                'updated_at' => '2024-07-18 21:12:16',
            ),
            131 => 
            array (
                'id' => 133,
                'genre_id' => 27,
                'movie_id' => 50,
                'created_at' => '2024-07-18 21:12:20',
                'updated_at' => '2024-07-18 21:12:20',
            ),
            132 => 
            array (
                'id' => 134,
                'genre_id' => 12,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            133 => 
            array (
                'id' => 135,
                'genre_id' => 28,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            134 => 
            array (
                'id' => 136,
                'genre_id' => 878,
                'movie_id' => 51,
                'created_at' => '2024-07-18 21:12:24',
                'updated_at' => '2024-07-18 21:12:24',
            ),
            135 => 
            array (
                'id' => 137,
                'genre_id' => 18,
                'movie_id' => 52,
                'created_at' => '2024-07-18 21:12:27',
                'updated_at' => '2024-07-18 21:12:27',
            ),
            136 => 
            array (
                'id' => 138,
                'genre_id' => 10749,
                'movie_id' => 52,
                'created_at' => '2024-07-18 21:12:27',
                'updated_at' => '2024-07-18 21:12:27',
            ),
            137 => 
            array (
                'id' => 139,
                'genre_id' => 27,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            138 => 
            array (
                'id' => 140,
                'genre_id' => 53,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            139 => 
            array (
                'id' => 141,
                'genre_id' => 12,
                'movie_id' => 53,
                'created_at' => '2024-07-18 21:12:31',
                'updated_at' => '2024-07-18 21:12:31',
            ),
            140 => 
            array (
                'id' => 142,
                'genre_id' => 18,
                'movie_id' => 54,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            141 => 
            array (
                'id' => 143,
                'genre_id' => 36,
                'movie_id' => 54,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            142 => 
            array (
                'id' => 144,
                'genre_id' => 18,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            143 => 
            array (
                'id' => 145,
                'genre_id' => 9648,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            144 => 
            array (
                'id' => 146,
                'genre_id' => 80,
                'movie_id' => 55,
                'created_at' => '2024-07-18 21:16:41',
                'updated_at' => '2024-07-18 21:16:41',
            ),
            145 => 
            array (
                'id' => 147,
                'genre_id' => 18,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            146 => 
            array (
                'id' => 148,
                'genre_id' => 28,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            147 => 
            array (
                'id' => 149,
                'genre_id' => 12,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            148 => 
            array (
                'id' => 150,
                'genre_id' => 36,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            149 => 
            array (
                'id' => 151,
                'genre_id' => 10752,
                'movie_id' => 56,
                'created_at' => '2024-07-18 21:16:42',
                'updated_at' => '2024-07-18 21:16:42',
            ),
            150 => 
            array (
                'id' => 152,
                'genre_id' => 37,
                'movie_id' => 57,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            151 => 
            array (
                'id' => 153,
                'genre_id' => 18,
                'movie_id' => 57,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            152 => 
            array (
                'id' => 154,
                'genre_id' => 37,
                'movie_id' => 58,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            153 => 
            array (
                'id' => 155,
                'genre_id' => 37,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            154 => 
            array (
                'id' => 156,
                'genre_id' => 53,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:47',
                'updated_at' => '2024-07-18 21:16:47',
            ),
            155 => 
            array (
                'id' => 157,
                'genre_id' => 28,
                'movie_id' => 59,
                'created_at' => '2024-07-18 21:16:48',
                'updated_at' => '2024-07-18 21:16:48',
            ),
            156 => 
            array (
                'id' => 158,
                'genre_id' => 18,
                'movie_id' => 60,
                'created_at' => '2024-07-18 21:16:57',
                'updated_at' => '2024-07-18 21:16:57',
            ),
            157 => 
            array (
                'id' => 159,
                'genre_id' => 10751,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            158 => 
            array (
                'id' => 160,
                'genre_id' => 10402,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            159 => 
            array (
                'id' => 161,
                'genre_id' => 12,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            160 => 
            array (
                'id' => 162,
                'genre_id' => 35,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            161 => 
            array (
                'id' => 163,
                'genre_id' => 14,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            162 => 
            array (
                'id' => 164,
                'genre_id' => 10770,
                'movie_id' => 61,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            163 => 
            array (
                'id' => 165,
                'genre_id' => 18,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            164 => 
            array (
                'id' => 166,
                'genre_id' => 9648,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            165 => 
            array (
                'id' => 167,
                'genre_id' => 53,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            166 => 
            array (
                'id' => 168,
                'genre_id' => 80,
                'movie_id' => 62,
                'created_at' => '2024-07-18 21:16:58',
                'updated_at' => '2024-07-18 21:16:58',
            ),
            167 => 
            array (
                'id' => 169,
                'genre_id' => 10752,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            168 => 
            array (
                'id' => 170,
                'genre_id' => 28,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            169 => 
            array (
                'id' => 171,
                'genre_id' => 18,
                'movie_id' => 63,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            170 => 
            array (
                'id' => 172,
                'genre_id' => 10752,
                'movie_id' => 64,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            171 => 
            array (
                'id' => 173,
                'genre_id' => 28,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            172 => 
            array (
                'id' => 174,
                'genre_id' => 14,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            173 => 
            array (
                'id' => 175,
                'genre_id' => 10752,
                'movie_id' => 65,
                'created_at' => '2024-07-18 21:17:04',
                'updated_at' => '2024-07-18 21:17:04',
            ),
            174 => 
            array (
                'id' => 176,
                'genre_id' => 18,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            175 => 
            array (
                'id' => 177,
                'genre_id' => 80,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            176 => 
            array (
                'id' => 178,
                'genre_id' => 53,
                'movie_id' => 66,
                'created_at' => '2024-07-19 22:25:00',
                'updated_at' => '2024-07-19 22:25:00',
            ),
            177 => 
            array (
                'id' => 179,
                'genre_id' => 14,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            178 => 
            array (
                'id' => 180,
                'genre_id' => 16,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            179 => 
            array (
                'id' => 181,
                'genre_id' => 10751,
                'movie_id' => 67,
                'created_at' => '2024-07-19 22:30:59',
                'updated_at' => '2024-07-19 22:30:59',
            ),
            180 => 
            array (
                'id' => 182,
                'genre_id' => 12,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            181 => 
            array (
                'id' => 183,
                'genre_id' => 28,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            182 => 
            array (
                'id' => 184,
                'genre_id' => 53,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            183 => 
            array (
                'id' => 185,
                'genre_id' => 878,
                'movie_id' => 68,
                'created_at' => '2024-07-20 20:04:22',
                'updated_at' => '2024-07-20 20:04:22',
            ),
            184 => 
            array (
                'id' => 186,
                'genre_id' => 18,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            185 => 
            array (
                'id' => 187,
                'genre_id' => 53,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            186 => 
            array (
                'id' => 188,
                'genre_id' => 9648,
                'movie_id' => 69,
                'created_at' => '2024-07-20 20:07:56',
                'updated_at' => '2024-07-20 20:07:56',
            ),
            187 => 
            array (
                'id' => 189,
                'genre_id' => 18,
                'movie_id' => 70,
                'created_at' => '2024-07-20 20:15:03',
                'updated_at' => '2024-07-20 20:15:03',
            ),
            188 => 
            array (
                'id' => 190,
                'genre_id' => 28,
                'movie_id' => 71,
                'created_at' => '2024-07-20 20:17:18',
                'updated_at' => '2024-07-20 20:17:18',
            ),
            189 => 
            array (
                'id' => 191,
                'genre_id' => 35,
                'movie_id' => 71,
                'created_at' => '2024-07-20 20:17:18',
                'updated_at' => '2024-07-20 20:17:18',
            ),
            190 => 
            array (
                'id' => 192,
                'genre_id' => 18,
                'movie_id' => 72,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            191 => 
            array (
                'id' => 193,
                'genre_id' => 35,
                'movie_id' => 72,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            192 => 
            array (
                'id' => 194,
                'genre_id' => 18,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            193 => 
            array (
                'id' => 195,
                'genre_id' => 10402,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            194 => 
            array (
                'id' => 196,
                'genre_id' => 10749,
                'movie_id' => 73,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            195 => 
            array (
                'id' => 197,
                'genre_id' => 18,
                'movie_id' => 74,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            196 => 
            array (
                'id' => 198,
                'genre_id' => 18,
                'movie_id' => 75,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            197 => 
            array (
                'id' => 199,
                'genre_id' => 12,
                'movie_id' => 75,
                'created_at' => '2024-07-20 20:22:48',
                'updated_at' => '2024-07-20 20:22:48',
            ),
            198 => 
            array (
                'id' => 200,
                'genre_id' => 28,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
            199 => 
            array (
                'id' => 201,
                'genre_id' => 12,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
            200 => 
            array (
                'id' => 202,
                'genre_id' => 53,
                'movie_id' => 76,
                'created_at' => '2024-08-27 08:52:33',
                'updated_at' => '2024-08-27 08:52:33',
            ),
            201 => 
            array (
                'id' => 203,
                'genre_id' => 18,
                'movie_id' => 77,
                'created_at' => '2024-10-01 08:21:32',
                'updated_at' => '2024-10-01 08:21:32',
            ),
            202 => 
            array (
                'id' => 204,
                'genre_id' => 18,
                'movie_id' => 78,
                'created_at' => '2024-10-01 08:24:35',
                'updated_at' => '2024-10-01 08:24:35',
            ),
            203 => 
            array (
                'id' => 205,
                'genre_id' => 18,
                'movie_id' => 79,
                'created_at' => '2024-10-01 08:37:03',
                'updated_at' => '2024-10-01 08:37:03',
            ),
            204 => 
            array (
                'id' => 206,
                'genre_id' => 35,
                'movie_id' => 79,
                'created_at' => '2024-10-01 08:37:03',
                'updated_at' => '2024-10-01 08:37:03',
            ),
            205 => 
            array (
                'id' => 207,
                'genre_id' => 14,
                'movie_id' => 79,
                'created_at' => '2024-10-01 08:37:03',
                'updated_at' => '2024-10-01 08:37:03',
            ),
            206 => 
            array (
                'id' => 208,
                'genre_id' => 9648,
                'movie_id' => 80,
                'created_at' => '2024-10-01 08:41:16',
                'updated_at' => '2024-10-01 08:41:16',
            ),
            207 => 
            array (
                'id' => 209,
                'genre_id' => 53,
                'movie_id' => 80,
                'created_at' => '2024-10-01 08:41:16',
                'updated_at' => '2024-10-01 08:41:16',
            ),
            208 => 
            array (
                'id' => 210,
                'genre_id' => 27,
                'movie_id' => 80,
                'created_at' => '2024-10-01 08:41:16',
                'updated_at' => '2024-10-01 08:41:16',
            ),
            209 => 
            array (
                'id' => 211,
                'genre_id' => 99,
                'movie_id' => 81,
                'created_at' => '2024-10-01 09:27:40',
                'updated_at' => '2024-10-01 09:27:40',
            ),
            210 => 
            array (
                'id' => 212,
                'genre_id' => 99,
                'movie_id' => 82,
                'created_at' => '2024-10-01 09:27:48',
                'updated_at' => '2024-10-01 09:27:48',
            ),
            211 => 
            array (
                'id' => 214,
                'genre_id' => 36,
                'movie_id' => 83,
                'created_at' => '2024-10-01 09:27:55',
                'updated_at' => '2024-10-01 09:27:55',
            ),
            212 => 
            array (
                'id' => 215,
                'genre_id' => 18,
                'movie_id' => 83,
                'created_at' => '2024-10-01 09:27:55',
                'updated_at' => '2024-10-01 09:27:55',
            ),
            213 => 
            array (
                'id' => 216,
                'genre_id' => 99,
                'movie_id' => 84,
                'created_at' => '2024-10-01 09:28:02',
                'updated_at' => '2024-10-01 09:28:02',
            ),
            214 => 
            array (
                'id' => 217,
                'genre_id' => 18,
                'movie_id' => 84,
                'created_at' => '2024-10-01 09:28:02',
                'updated_at' => '2024-10-01 09:28:02',
            ),
            215 => 
            array (
                'id' => 218,
                'genre_id' => 10402,
                'movie_id' => 85,
                'created_at' => '2024-10-01 09:28:08',
                'updated_at' => '2024-10-01 09:28:08',
            ),
            216 => 
            array (
                'id' => 219,
                'genre_id' => 99,
                'movie_id' => 85,
                'created_at' => '2024-10-01 09:28:08',
                'updated_at' => '2024-10-01 09:28:08',
            ),
            217 => 
            array (
                'id' => 220,
                'genre_id' => 18,
                'movie_id' => 86,
                'created_at' => '2024-10-01 10:12:44',
                'updated_at' => '2024-10-01 10:12:44',
            ),
            218 => 
            array (
                'id' => 221,
                'genre_id' => 80,
                'movie_id' => 86,
                'created_at' => '2024-10-01 10:12:44',
                'updated_at' => '2024-10-01 10:12:44',
            ),
            219 => 
            array (
                'id' => 222,
                'genre_id' => 18,
                'movie_id' => 87,
                'created_at' => '2024-10-01 10:12:51',
                'updated_at' => '2024-10-01 10:12:51',
            ),
            220 => 
            array (
                'id' => 223,
                'genre_id' => 80,
                'movie_id' => 87,
                'created_at' => '2024-10-01 10:12:51',
                'updated_at' => '2024-10-01 10:12:51',
            ),
            221 => 
            array (
                'id' => 224,
                'genre_id' => 18,
                'movie_id' => 88,
                'created_at' => '2024-10-01 10:12:57',
                'updated_at' => '2024-10-01 10:12:57',
            ),
            222 => 
            array (
                'id' => 225,
                'genre_id' => 16,
                'movie_id' => 89,
                'created_at' => '2024-10-01 10:13:03',
                'updated_at' => '2024-10-01 10:13:03',
            ),
            223 => 
            array (
                'id' => 226,
                'genre_id' => 10751,
                'movie_id' => 89,
                'created_at' => '2024-10-01 10:13:03',
                'updated_at' => '2024-10-01 10:13:03',
            ),
            224 => 
            array (
                'id' => 227,
                'genre_id' => 14,
                'movie_id' => 89,
                'created_at' => '2024-10-01 10:13:03',
                'updated_at' => '2024-10-01 10:13:03',
            ),
            225 => 
            array (
                'id' => 228,
                'genre_id' => 18,
                'movie_id' => 90,
                'created_at' => '2024-10-01 10:13:09',
                'updated_at' => '2024-10-01 10:13:09',
            ),
            226 => 
            array (
                'id' => 229,
                'genre_id' => 28,
                'movie_id' => 90,
                'created_at' => '2024-10-01 10:13:09',
                'updated_at' => '2024-10-01 10:13:09',
            ),
            227 => 
            array (
                'id' => 230,
                'genre_id' => 80,
                'movie_id' => 90,
                'created_at' => '2024-10-01 10:13:09',
                'updated_at' => '2024-10-01 10:13:09',
            ),
            228 => 
            array (
                'id' => 231,
                'genre_id' => 53,
                'movie_id' => 90,
                'created_at' => '2024-10-01 10:13:09',
                'updated_at' => '2024-10-01 10:13:09',
            ),
            229 => 
            array (
                'id' => 232,
                'genre_id' => 14,
                'movie_id' => 91,
                'created_at' => '2024-10-01 10:13:14',
                'updated_at' => '2024-10-01 10:13:14',
            ),
            230 => 
            array (
                'id' => 233,
                'genre_id' => 18,
                'movie_id' => 91,
                'created_at' => '2024-10-01 10:13:14',
                'updated_at' => '2024-10-01 10:13:14',
            ),
            231 => 
            array (
                'id' => 234,
                'genre_id' => 80,
                'movie_id' => 91,
                'created_at' => '2024-10-01 10:13:14',
                'updated_at' => '2024-10-01 10:13:14',
            ),
            232 => 
            array (
                'id' => 235,
                'genre_id' => 53,
                'movie_id' => 92,
                'created_at' => '2024-10-01 10:13:19',
                'updated_at' => '2024-10-01 10:13:19',
            ),
            233 => 
            array (
                'id' => 236,
                'genre_id' => 80,
                'movie_id' => 92,
                'created_at' => '2024-10-01 10:13:19',
                'updated_at' => '2024-10-01 10:13:19',
            ),
            234 => 
            array (
                'id' => 237,
                'genre_id' => 35,
                'movie_id' => 93,
                'created_at' => '2024-10-01 10:13:24',
                'updated_at' => '2024-10-01 10:13:24',
            ),
            235 => 
            array (
                'id' => 238,
                'genre_id' => 18,
                'movie_id' => 93,
                'created_at' => '2024-10-01 10:13:24',
                'updated_at' => '2024-10-01 10:13:24',
            ),
            236 => 
            array (
                'id' => 239,
                'genre_id' => 10749,
                'movie_id' => 93,
                'created_at' => '2024-10-01 10:13:24',
                'updated_at' => '2024-10-01 10:13:24',
            ),
            237 => 
            array (
                'id' => 240,
                'genre_id' => 28,
                'movie_id' => 94,
                'created_at' => '2024-10-01 10:13:29',
                'updated_at' => '2024-10-01 10:13:29',
            ),
            238 => 
            array (
                'id' => 241,
                'genre_id' => 18,
                'movie_id' => 94,
                'created_at' => '2024-10-01 10:13:29',
                'updated_at' => '2024-10-01 10:13:29',
            ),
            239 => 
            array (
                'id' => 242,
                'genre_id' => 18,
                'movie_id' => 95,
                'created_at' => '2024-10-01 10:13:34',
                'updated_at' => '2024-10-01 10:13:34',
            ),
            240 => 
            array (
                'id' => 243,
                'genre_id' => 80,
                'movie_id' => 95,
                'created_at' => '2024-10-01 10:13:34',
                'updated_at' => '2024-10-01 10:13:34',
            ),
            241 => 
            array (
                'id' => 244,
                'genre_id' => 16,
                'movie_id' => 96,
                'created_at' => '2024-10-01 10:13:39',
                'updated_at' => '2024-10-01 10:13:39',
            ),
            242 => 
            array (
                'id' => 245,
                'genre_id' => 18,
                'movie_id' => 96,
                'created_at' => '2024-10-01 10:13:39',
                'updated_at' => '2024-10-01 10:13:39',
            ),
            243 => 
            array (
                'id' => 246,
                'genre_id' => 10752,
                'movie_id' => 96,
                'created_at' => '2024-10-01 10:13:39',
                'updated_at' => '2024-10-01 10:13:39',
            ),
            244 => 
            array (
                'id' => 247,
                'genre_id' => 35,
                'movie_id' => 97,
                'created_at' => '2024-10-01 10:13:45',
                'updated_at' => '2024-10-01 10:13:45',
            ),
            245 => 
            array (
                'id' => 248,
                'genre_id' => 18,
                'movie_id' => 97,
                'created_at' => '2024-10-01 10:13:45',
                'updated_at' => '2024-10-01 10:13:45',
            ),
            246 => 
            array (
                'id' => 249,
                'genre_id' => 12,
                'movie_id' => 98,
                'created_at' => '2024-10-01 10:13:50',
                'updated_at' => '2024-10-01 10:13:50',
            ),
            247 => 
            array (
                'id' => 250,
                'genre_id' => 18,
                'movie_id' => 98,
                'created_at' => '2024-10-01 10:13:50',
                'updated_at' => '2024-10-01 10:13:50',
            ),
            248 => 
            array (
                'id' => 251,
                'genre_id' => 878,
                'movie_id' => 98,
                'created_at' => '2024-10-01 10:13:50',
                'updated_at' => '2024-10-01 10:13:50',
            ),
            249 => 
            array (
                'id' => 252,
                'genre_id' => 18,
                'movie_id' => 99,
                'created_at' => '2024-10-01 10:13:55',
                'updated_at' => '2024-10-01 10:13:55',
            ),
            250 => 
            array (
                'id' => 253,
                'genre_id' => 80,
                'movie_id' => 99,
                'created_at' => '2024-10-01 10:13:55',
                'updated_at' => '2024-10-01 10:13:55',
            ),
            251 => 
            array (
                'id' => 254,
                'genre_id' => 12,
                'movie_id' => 100,
                'created_at' => '2024-10-01 10:14:00',
                'updated_at' => '2024-10-01 10:14:00',
            ),
            252 => 
            array (
                'id' => 255,
                'genre_id' => 28,
                'movie_id' => 100,
                'created_at' => '2024-10-01 10:14:00',
                'updated_at' => '2024-10-01 10:14:00',
            ),
            253 => 
            array (
                'id' => 256,
                'genre_id' => 878,
                'movie_id' => 100,
                'created_at' => '2024-10-01 10:14:00',
                'updated_at' => '2024-10-01 10:14:00',
            ),
            254 => 
            array (
                'id' => 257,
                'genre_id' => 18,
                'movie_id' => 101,
                'created_at' => '2024-10-10 08:58:57',
                'updated_at' => '2024-10-10 08:58:57',
            ),
            255 => 
            array (
                'id' => 258,
                'genre_id' => 35,
                'movie_id' => 102,
                'created_at' => '2024-10-10 09:50:25',
                'updated_at' => '2024-10-10 09:50:25',
            ),
            256 => 
            array (
                'id' => 259,
                'genre_id' => 18,
                'movie_id' => 102,
                'created_at' => '2024-10-10 09:50:25',
                'updated_at' => '2024-10-10 09:50:25',
            ),
            257 => 
            array (
                'id' => 260,
                'genre_id' => 80,
                'movie_id' => 103,
                'created_at' => '2024-10-10 09:54:06',
                'updated_at' => '2024-10-10 09:54:06',
            ),
            258 => 
            array (
                'id' => 261,
                'genre_id' => 18,
                'movie_id' => 103,
                'created_at' => '2024-10-10 09:54:06',
                'updated_at' => '2024-10-10 09:54:06',
            ),
            259 => 
            array (
                'id' => 262,
                'genre_id' => 27,
                'movie_id' => 104,
                'created_at' => '2024-10-10 09:54:35',
                'updated_at' => '2024-10-10 09:54:35',
            ),
            260 => 
            array (
                'id' => 263,
                'genre_id' => 53,
                'movie_id' => 104,
                'created_at' => '2024-10-10 09:54:35',
                'updated_at' => '2024-10-10 09:54:35',
            ),
            261 => 
            array (
                'id' => 264,
                'genre_id' => 9648,
                'movie_id' => 104,
                'created_at' => '2024-10-10 09:54:35',
                'updated_at' => '2024-10-10 09:54:35',
            ),
            262 => 
            array (
                'id' => 265,
                'genre_id' => 18,
                'movie_id' => 105,
                'created_at' => '2024-10-10 09:55:00',
                'updated_at' => '2024-10-10 09:55:00',
            ),
            263 => 
            array (
                'id' => 266,
                'genre_id' => 53,
                'movie_id' => 105,
                'created_at' => '2024-10-10 09:55:00',
                'updated_at' => '2024-10-10 09:55:00',
            ),
            264 => 
            array (
                'id' => 267,
                'genre_id' => 10752,
                'movie_id' => 105,
                'created_at' => '2024-10-10 09:55:00',
                'updated_at' => '2024-10-10 09:55:00',
            ),
            265 => 
            array (
                'id' => 268,
                'genre_id' => 10752,
                'movie_id' => 106,
                'created_at' => '2024-10-10 09:55:21',
                'updated_at' => '2024-10-10 09:55:21',
            ),
            266 => 
            array (
                'id' => 269,
                'genre_id' => 28,
                'movie_id' => 106,
                'created_at' => '2024-10-10 09:55:21',
                'updated_at' => '2024-10-10 09:55:21',
            ),
            267 => 
            array (
                'id' => 270,
                'genre_id' => 18,
                'movie_id' => 107,
                'created_at' => '2024-10-10 09:55:48',
                'updated_at' => '2024-10-10 09:55:48',
            ),
            268 => 
            array (
                'id' => 271,
                'genre_id' => 53,
                'movie_id' => 107,
                'created_at' => '2024-10-10 09:55:48',
                'updated_at' => '2024-10-10 09:55:48',
            ),
            269 => 
            array (
                'id' => 272,
                'genre_id' => 9648,
                'movie_id' => 107,
                'created_at' => '2024-10-10 09:55:48',
                'updated_at' => '2024-10-10 09:55:48',
            ),
            270 => 
            array (
                'id' => 273,
                'genre_id' => 80,
                'movie_id' => 108,
                'created_at' => '2024-10-10 09:59:52',
                'updated_at' => '2024-10-10 09:59:52',
            ),
            271 => 
            array (
                'id' => 274,
                'genre_id' => 53,
                'movie_id' => 108,
                'created_at' => '2024-10-10 09:59:52',
                'updated_at' => '2024-10-10 09:59:52',
            ),
            272 => 
            array (
                'id' => 275,
                'genre_id' => 28,
                'movie_id' => 108,
                'created_at' => '2024-10-10 09:59:52',
                'updated_at' => '2024-10-10 09:59:52',
            ),
            273 => 
            array (
                'id' => 276,
                'genre_id' => 18,
                'movie_id' => 109,
                'created_at' => '2024-10-10 10:00:53',
                'updated_at' => '2024-10-10 10:00:53',
            ),
            274 => 
            array (
                'id' => 277,
                'genre_id' => 18,
                'movie_id' => 111,
                'created_at' => '2024-10-10 10:02:42',
                'updated_at' => '2024-10-10 10:02:42',
            ),
            275 => 
            array (
                'id' => 278,
                'genre_id' => 80,
                'movie_id' => 112,
                'created_at' => '2024-10-10 10:03:07',
                'updated_at' => '2024-10-10 10:03:07',
            ),
            276 => 
            array (
                'id' => 279,
                'genre_id' => 18,
                'movie_id' => 112,
                'created_at' => '2024-10-10 10:03:07',
                'updated_at' => '2024-10-10 10:03:07',
            ),
            277 => 
            array (
                'id' => 280,
                'genre_id' => 53,
                'movie_id' => 112,
                'created_at' => '2024-10-10 10:03:07',
                'updated_at' => '2024-10-10 10:03:07',
            ),
            278 => 
            array (
                'id' => 281,
                'genre_id' => 10749,
                'movie_id' => 113,
                'created_at' => '2024-10-10 10:03:32',
                'updated_at' => '2024-10-10 10:03:32',
            ),
            279 => 
            array (
                'id' => 282,
                'genre_id' => 18,
                'movie_id' => 113,
                'created_at' => '2024-10-10 10:03:32',
                'updated_at' => '2024-10-10 10:03:32',
            ),
            280 => 
            array (
                'id' => 283,
                'genre_id' => 12,
                'movie_id' => 113,
                'created_at' => '2024-10-10 10:03:32',
                'updated_at' => '2024-10-10 10:03:32',
            ),
            281 => 
            array (
                'id' => 284,
                'genre_id' => 18,
                'movie_id' => 114,
                'created_at' => '2024-10-10 10:04:39',
                'updated_at' => '2024-10-10 10:04:39',
            ),
            282 => 
            array (
                'id' => 285,
                'genre_id' => 99,
                'movie_id' => 115,
                'created_at' => '2024-10-10 10:05:42',
                'updated_at' => '2024-10-10 10:05:42',
            ),
            283 => 
            array (
                'id' => 286,
                'genre_id' => 80,
                'movie_id' => 116,
                'created_at' => '2024-10-10 10:06:14',
                'updated_at' => '2024-10-10 10:06:14',
            ),
            284 => 
            array (
                'id' => 287,
                'genre_id' => 53,
                'movie_id' => 116,
                'created_at' => '2024-10-10 10:06:14',
                'updated_at' => '2024-10-10 10:06:14',
            ),
            285 => 
            array (
                'id' => 288,
                'genre_id' => 28,
                'movie_id' => 116,
                'created_at' => '2024-10-10 10:06:14',
                'updated_at' => '2024-10-10 10:06:14',
            ),
            286 => 
            array (
                'id' => 289,
                'genre_id' => 18,
                'movie_id' => 117,
                'created_at' => '2024-10-10 10:06:34',
                'updated_at' => '2024-10-10 10:06:34',
            ),
            287 => 
            array (
                'id' => 290,
                'genre_id' => 10749,
                'movie_id' => 117,
                'created_at' => '2024-10-10 10:06:34',
                'updated_at' => '2024-10-10 10:06:34',
            ),
            288 => 
            array (
                'id' => 291,
                'genre_id' => 9648,
                'movie_id' => 118,
                'created_at' => '2024-10-10 10:06:55',
                'updated_at' => '2024-10-10 10:06:55',
            ),
            289 => 
            array (
                'id' => 292,
                'genre_id' => 28,
                'movie_id' => 118,
                'created_at' => '2024-10-10 10:06:55',
                'updated_at' => '2024-10-10 10:06:55',
            ),
            290 => 
            array (
                'id' => 293,
                'genre_id' => 878,
                'movie_id' => 118,
                'created_at' => '2024-10-10 10:06:55',
                'updated_at' => '2024-10-10 10:06:55',
            ),
            291 => 
            array (
                'id' => 294,
                'genre_id' => 14,
                'movie_id' => 119,
                'created_at' => '2024-10-10 10:07:45',
                'updated_at' => '2024-10-10 10:07:45',
            ),
            292 => 
            array (
                'id' => 295,
                'genre_id' => 35,
                'movie_id' => 119,
                'created_at' => '2024-10-10 10:07:45',
                'updated_at' => '2024-10-10 10:07:45',
            ),
            293 => 
            array (
                'id' => 296,
                'genre_id' => 10751,
                'movie_id' => 119,
                'created_at' => '2024-10-10 10:07:45',
                'updated_at' => '2024-10-10 10:07:45',
            ),
            294 => 
            array (
                'id' => 297,
                'genre_id' => 27,
                'movie_id' => 120,
                'created_at' => '2024-10-10 10:08:05',
                'updated_at' => '2024-10-10 10:08:05',
            ),
            295 => 
            array (
                'id' => 298,
                'genre_id' => 18,
                'movie_id' => 120,
                'created_at' => '2024-10-10 10:08:05',
                'updated_at' => '2024-10-10 10:08:05',
            ),
            296 => 
            array (
                'id' => 299,
                'genre_id' => 53,
                'movie_id' => 120,
                'created_at' => '2024-10-10 10:08:05',
                'updated_at' => '2024-10-10 10:08:05',
            ),
            297 => 
            array (
                'id' => 300,
                'genre_id' => 18,
                'movie_id' => 121,
                'created_at' => '2024-10-10 10:08:50',
                'updated_at' => '2024-10-10 10:08:50',
            ),
            298 => 
            array (
                'id' => 301,
                'genre_id' => 80,
                'movie_id' => 121,
                'created_at' => '2024-10-10 10:08:50',
                'updated_at' => '2024-10-10 10:08:50',
            ),
            299 => 
            array (
                'id' => 302,
                'genre_id' => 18,
                'movie_id' => 122,
                'created_at' => '2024-10-10 10:09:17',
                'updated_at' => '2024-10-10 10:09:17',
            ),
            300 => 
            array (
                'id' => 303,
                'genre_id' => 80,
                'movie_id' => 123,
                'created_at' => '2024-10-10 10:09:45',
                'updated_at' => '2024-10-10 10:09:45',
            ),
            301 => 
            array (
                'id' => 304,
                'genre_id' => 18,
                'movie_id' => 123,
                'created_at' => '2024-10-10 10:09:45',
                'updated_at' => '2024-10-10 10:09:45',
            ),
            302 => 
            array (
                'id' => 305,
                'genre_id' => 80,
                'movie_id' => 124,
                'created_at' => '2024-10-10 10:10:20',
                'updated_at' => '2024-10-10 10:10:20',
            ),
            303 => 
            array (
                'id' => 306,
                'genre_id' => 18,
                'movie_id' => 124,
                'created_at' => '2024-10-10 10:10:20',
                'updated_at' => '2024-10-10 10:10:20',
            ),
            304 => 
            array (
                'id' => 307,
                'genre_id' => 9648,
                'movie_id' => 124,
                'created_at' => '2024-10-10 10:10:20',
                'updated_at' => '2024-10-10 10:10:20',
            ),
            305 => 
            array (
                'id' => 308,
                'genre_id' => 18,
                'movie_id' => 125,
                'created_at' => '2024-10-10 10:10:39',
                'updated_at' => '2024-10-10 10:10:39',
            ),
            306 => 
            array (
                'id' => 309,
                'genre_id' => 80,
                'movie_id' => 125,
                'created_at' => '2024-10-10 10:10:39',
                'updated_at' => '2024-10-10 10:10:39',
            ),
            307 => 
            array (
                'id' => 310,
                'genre_id' => 18,
                'movie_id' => 126,
                'created_at' => '2024-10-10 10:10:59',
                'updated_at' => '2024-10-10 10:10:59',
            ),
            308 => 
            array (
                'id' => 311,
                'genre_id' => 80,
                'movie_id' => 126,
                'created_at' => '2024-10-10 10:10:59',
                'updated_at' => '2024-10-10 10:10:59',
            ),
            309 => 
            array (
                'id' => 312,
                'genre_id' => 10402,
                'movie_id' => 127,
                'created_at' => '2024-10-10 10:11:17',
                'updated_at' => '2024-10-10 10:11:17',
            ),
            310 => 
            array (
                'id' => 313,
                'genre_id' => 18,
                'movie_id' => 127,
                'created_at' => '2024-10-10 10:11:17',
                'updated_at' => '2024-10-10 10:11:17',
            ),
            311 => 
            array (
                'id' => 314,
                'genre_id' => 35,
                'movie_id' => 127,
                'created_at' => '2024-10-10 10:11:17',
                'updated_at' => '2024-10-10 10:11:17',
            ),
            312 => 
            array (
                'id' => 315,
                'genre_id' => 53,
                'movie_id' => 128,
                'created_at' => '2024-10-10 10:11:35',
                'updated_at' => '2024-10-10 10:11:35',
            ),
            313 => 
            array (
                'id' => 316,
                'genre_id' => 18,
                'movie_id' => 128,
                'created_at' => '2024-10-10 10:11:35',
                'updated_at' => '2024-10-10 10:11:35',
            ),
            314 => 
            array (
                'id' => 317,
                'genre_id' => 9648,
                'movie_id' => 128,
                'created_at' => '2024-10-10 10:11:35',
                'updated_at' => '2024-10-10 10:11:35',
            ),
            315 => 
            array (
                'id' => 318,
                'genre_id' => 18,
                'movie_id' => 129,
                'created_at' => '2024-10-10 10:12:12',
                'updated_at' => '2024-10-10 10:12:12',
            ),
            316 => 
            array (
                'id' => 319,
                'genre_id' => 10749,
                'movie_id' => 130,
                'created_at' => '2024-10-10 10:12:37',
                'updated_at' => '2024-10-10 10:12:37',
            ),
            317 => 
            array (
                'id' => 320,
                'genre_id' => 18,
                'movie_id' => 130,
                'created_at' => '2024-10-10 10:12:37',
                'updated_at' => '2024-10-10 10:12:37',
            ),
            318 => 
            array (
                'id' => 321,
                'genre_id' => 36,
                'movie_id' => 131,
                'created_at' => '2024-10-10 10:13:08',
                'updated_at' => '2024-10-10 10:13:08',
            ),
            319 => 
            array (
                'id' => 322,
                'genre_id' => 18,
                'movie_id' => 131,
                'created_at' => '2024-10-10 10:13:08',
                'updated_at' => '2024-10-10 10:13:08',
            ),
            320 => 
            array (
                'id' => 323,
                'genre_id' => 18,
                'movie_id' => 132,
                'created_at' => '2024-10-10 10:13:46',
                'updated_at' => '2024-10-10 10:13:46',
            ),
            321 => 
            array (
                'id' => 324,
                'genre_id' => 18,
                'movie_id' => 133,
                'created_at' => '2024-10-10 10:14:16',
                'updated_at' => '2024-10-10 10:14:16',
            ),
            322 => 
            array (
                'id' => 325,
                'genre_id' => 80,
                'movie_id' => 133,
                'created_at' => '2024-10-10 10:14:16',
                'updated_at' => '2024-10-10 10:14:16',
            ),
            323 => 
            array (
                'id' => 326,
                'genre_id' => 10402,
                'movie_id' => 133,
                'created_at' => '2024-10-10 10:14:16',
                'updated_at' => '2024-10-10 10:14:16',
            ),
            324 => 
            array (
                'id' => 327,
                'genre_id' => 878,
                'movie_id' => 133,
                'created_at' => '2024-10-10 10:14:16',
                'updated_at' => '2024-10-10 10:14:16',
            ),
            325 => 
            array (
                'id' => 328,
                'genre_id' => 18,
                'movie_id' => 134,
                'created_at' => '2024-10-10 10:14:41',
                'updated_at' => '2024-10-10 10:14:41',
            ),
            326 => 
            array (
                'id' => 329,
                'genre_id' => 36,
                'movie_id' => 134,
                'created_at' => '2024-10-10 10:14:41',
                'updated_at' => '2024-10-10 10:14:41',
            ),
            327 => 
            array (
                'id' => 330,
                'genre_id' => 80,
                'movie_id' => 135,
                'created_at' => '2024-10-10 10:15:26',
                'updated_at' => '2024-10-10 10:15:26',
            ),
            328 => 
            array (
                'id' => 331,
                'genre_id' => 18,
                'movie_id' => 135,
                'created_at' => '2024-10-10 10:15:26',
                'updated_at' => '2024-10-10 10:15:26',
            ),
            329 => 
            array (
                'id' => 332,
                'genre_id' => 53,
                'movie_id' => 135,
                'created_at' => '2024-10-10 10:15:26',
                'updated_at' => '2024-10-10 10:15:26',
            ),
            330 => 
            array (
                'id' => 333,
                'genre_id' => 18,
                'movie_id' => 136,
                'created_at' => '2024-10-10 10:15:59',
                'updated_at' => '2024-10-10 10:15:59',
            ),
            331 => 
            array (
                'id' => 334,
                'genre_id' => 80,
                'movie_id' => 137,
                'created_at' => '2024-10-10 10:16:39',
                'updated_at' => '2024-10-10 10:16:39',
            ),
            332 => 
            array (
                'id' => 335,
                'genre_id' => 53,
                'movie_id' => 137,
                'created_at' => '2024-10-10 10:16:39',
                'updated_at' => '2024-10-10 10:16:39',
            ),
            333 => 
            array (
                'id' => 336,
                'genre_id' => 18,
                'movie_id' => 137,
                'created_at' => '2024-10-10 10:16:39',
                'updated_at' => '2024-10-10 10:16:39',
            ),
            334 => 
            array (
                'id' => 337,
                'genre_id' => 18,
                'movie_id' => 138,
                'created_at' => '2024-10-10 10:17:28',
                'updated_at' => '2024-10-10 10:17:28',
            ),
            335 => 
            array (
                'id' => 338,
                'genre_id' => 28,
                'movie_id' => 139,
                'created_at' => '2024-10-10 10:18:35',
                'updated_at' => '2024-10-10 10:18:35',
            ),
            336 => 
            array (
                'id' => 339,
                'genre_id' => 53,
                'movie_id' => 139,
                'created_at' => '2024-10-10 10:18:35',
                'updated_at' => '2024-10-10 10:18:35',
            ),
            337 => 
            array (
                'id' => 340,
                'genre_id' => 27,
                'movie_id' => 140,
                'created_at' => '2024-10-10 10:44:54',
                'updated_at' => '2024-10-10 10:44:54',
            ),
            338 => 
            array (
                'id' => 341,
                'genre_id' => 9648,
                'movie_id' => 140,
                'created_at' => '2024-10-10 10:44:54',
                'updated_at' => '2024-10-10 10:44:54',
            ),
            339 => 
            array (
                'id' => 342,
                'genre_id' => 53,
                'movie_id' => 140,
                'created_at' => '2024-10-10 10:44:54',
                'updated_at' => '2024-10-10 10:44:54',
            ),
            340 => 
            array (
                'id' => 343,
                'genre_id' => 18,
                'movie_id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 344,
                'genre_id' => 18,
                'movie_id' => 141,
                'created_at' => '2024-10-10 11:24:01',
                'updated_at' => '2024-10-10 11:24:01',
            ),
            342 => 
            array (
                'id' => 345,
                'genre_id' => 18,
                'movie_id' => 142,
                'created_at' => '2024-10-10 11:28:35',
                'updated_at' => '2024-10-10 11:28:35',
            ),
            343 => 
            array (
                'id' => 346,
                'genre_id' => 9648,
                'movie_id' => 142,
                'created_at' => '2024-10-10 11:28:35',
                'updated_at' => '2024-10-10 11:28:35',
            ),
            344 => 
            array (
                'id' => 347,
                'genre_id' => 27,
                'movie_id' => 142,
                'created_at' => '2024-10-10 11:28:35',
                'updated_at' => '2024-10-10 11:28:35',
            ),
            345 => 
            array (
                'id' => 348,
                'genre_id' => 878,
                'movie_id' => 143,
                'created_at' => '2024-10-10 11:41:15',
                'updated_at' => '2024-10-10 11:41:15',
            ),
            346 => 
            array (
                'id' => 349,
                'genre_id' => 12,
                'movie_id' => 143,
                'created_at' => '2024-10-10 11:41:15',
                'updated_at' => '2024-10-10 11:41:15',
            ),
            347 => 
            array (
                'id' => 350,
                'genre_id' => 28,
                'movie_id' => 143,
                'created_at' => '2024-10-10 11:41:15',
                'updated_at' => '2024-10-10 11:41:15',
            ),
        ));
        
        
    }
}