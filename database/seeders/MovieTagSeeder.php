<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieTagSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_tag')->delete();
        
        \DB::table('movie_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'tag_id' => 2,
                'user_id' => 1,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'tag_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 2,
                'tag_id' => 4,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 2,
                'tag_id' => 11,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 2,
                'tag_id' => 17,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'movie_id' => 3,
                'tag_id' => 14,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'movie_id' => 4,
                'tag_id' => 11,
                'user_id' => 1,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'movie_id' => 4,
                'tag_id' => 15,
                'user_id' => 1,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'movie_id' => 5,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'movie_id' => 5,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'movie_id' => 2,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'movie_id' => 2,
                'tag_id' => 17,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'movie_id' => 1,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'movie_id' => 3,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'movie_id' => 3,
                'tag_id' => 14,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'movie_id' => 4,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'movie_id' => 4,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'movie_id' => 25,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'movie_id' => 26,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'movie_id' => 26,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'movie_id' => 26,
                'tag_id' => 17,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'movie_id' => 31,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'movie_id' => 31,
                'tag_id' => 16,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'movie_id' => 31,
                'tag_id' => 18,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'movie_id' => 33,
                'tag_id' => 8,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'movie_id' => 33,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'movie_id' => 43,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'movie_id' => 43,
                'tag_id' => 18,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'movie_id' => 43,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'movie_id' => 69,
                'tag_id' => 11,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'movie_id' => 69,
                'tag_id' => 22,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'movie_id' => 70,
                'tag_id' => 1,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'movie_id' => 70,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'movie_id' => 71,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'movie_id' => 71,
                'tag_id' => 4,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'movie_id' => 72,
                'tag_id' => 2,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'movie_id' => 72,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'movie_id' => 66,
                'tag_id' => 12,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'movie_id' => 66,
                'tag_id' => 14,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'movie_id' => 66,
                'tag_id' => 16,
                'user_id' => 4,
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 45,
                'movie_id' => 76,
                'tag_id' => 3,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:55:57',
                'updated_at' => '2024-08-27 08:55:57',
            ),
            41 => 
            array (
                'id' => 46,
                'movie_id' => 76,
                'tag_id' => 17,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:55:57',
                'updated_at' => '2024-08-27 08:55:57',
            ),
            42 => 
            array (
                'id' => 47,
                'movie_id' => 31,
                'tag_id' => 6,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:57:47',
                'updated_at' => '2024-08-27 08:57:47',
            ),
            43 => 
            array (
                'id' => 48,
                'movie_id' => 31,
                'tag_id' => 7,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:57:47',
                'updated_at' => '2024-08-27 08:57:47',
            ),
            44 => 
            array (
                'id' => 49,
                'movie_id' => 46,
                'tag_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:59:31',
                'updated_at' => '2024-08-27 08:59:31',
            ),
            45 => 
            array (
                'id' => 50,
                'movie_id' => 46,
                'tag_id' => 11,
                'user_id' => 2,
                'created_at' => '2024-08-27 08:59:31',
                'updated_at' => '2024-08-27 08:59:31',
            ),
            46 => 
            array (
                'id' => 54,
                'movie_id' => 75,
                'tag_id' => 19,
                'user_id' => 2,
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => '2024-08-27 09:03:46',
            ),
            47 => 
            array (
                'id' => 55,
                'movie_id' => 75,
                'tag_id' => 21,
                'user_id' => 2,
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => '2024-08-27 09:03:46',
            ),
            48 => 
            array (
                'id' => 56,
                'movie_id' => 75,
                'tag_id' => 23,
                'user_id' => 2,
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => '2024-08-27 09:03:46',
            ),
            49 => 
            array (
                'id' => 63,
                'movie_id' => 67,
                'tag_id' => 10,
                'user_id' => 4,
                'created_at' => '2024-08-27 09:14:41',
                'updated_at' => '2024-08-27 09:14:41',
            ),
            50 => 
            array (
                'id' => 64,
                'movie_id' => 67,
                'tag_id' => 15,
                'user_id' => 4,
                'created_at' => '2024-08-27 09:14:41',
                'updated_at' => '2024-08-27 09:14:41',
            ),
            51 => 
            array (
                'id' => 65,
                'movie_id' => 67,
                'tag_id' => 20,
                'user_id' => 4,
                'created_at' => '2024-08-27 09:14:41',
                'updated_at' => '2024-08-27 09:14:41',
            ),
            52 => 
            array (
                'id' => 66,
                'movie_id' => 66,
                'tag_id' => 12,
                'user_id' => 2,
                'created_at' => '2024-08-27 12:39:02',
                'updated_at' => '2024-08-27 12:39:02',
            ),
            53 => 
            array (
                'id' => 67,
                'movie_id' => 66,
                'tag_id' => 13,
                'user_id' => 2,
                'created_at' => '2024-08-27 12:39:02',
                'updated_at' => '2024-08-27 12:39:02',
            ),
            54 => 
            array (
                'id' => 68,
                'movie_id' => 10,
                'tag_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-09-21 18:13:34',
                'updated_at' => '2024-09-21 18:13:34',
            ),
            55 => 
            array (
                'id' => 69,
                'movie_id' => 10,
                'tag_id' => 14,
                'user_id' => 2,
                'created_at' => '2024-09-21 18:13:34',
                'updated_at' => '2024-09-21 18:13:34',
            ),
            56 => 
            array (
                'id' => 72,
                'movie_id' => 7,
                'tag_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-09-21 18:52:54',
                'updated_at' => '2024-09-21 18:52:54',
            ),
            57 => 
            array (
                'id' => 73,
                'movie_id' => 7,
                'tag_id' => 11,
                'user_id' => 2,
                'created_at' => '2024-09-21 18:52:54',
                'updated_at' => '2024-09-21 18:52:54',
            ),
            58 => 
            array (
                'id' => 74,
                'movie_id' => 13,
                'tag_id' => 5,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:07:02',
                'updated_at' => '2024-09-21 19:07:02',
            ),
            59 => 
            array (
                'id' => 75,
                'movie_id' => 13,
                'tag_id' => 22,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:07:02',
                'updated_at' => '2024-09-21 19:07:02',
            ),
            60 => 
            array (
                'id' => 76,
                'movie_id' => 58,
                'tag_id' => 4,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:09:26',
                'updated_at' => '2024-09-21 19:09:26',
            ),
            61 => 
            array (
                'id' => 77,
                'movie_id' => 6,
                'tag_id' => 6,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:37:30',
                'updated_at' => '2024-09-21 19:37:30',
            ),
            62 => 
            array (
                'id' => 78,
                'movie_id' => 36,
                'tag_id' => 1,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:39:54',
                'updated_at' => '2024-09-21 19:39:54',
            ),
            63 => 
            array (
                'id' => 79,
                'movie_id' => 36,
                'tag_id' => 5,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:39:54',
                'updated_at' => '2024-09-21 19:39:54',
            ),
            64 => 
            array (
                'id' => 80,
                'movie_id' => 36,
                'tag_id' => 22,
                'user_id' => 2,
                'created_at' => '2024-09-21 19:39:54',
                'updated_at' => '2024-09-21 19:39:54',
            ),
            65 => 
            array (
                'id' => 81,
                'movie_id' => 55,
                'tag_id' => 12,
                'user_id' => 5,
                'created_at' => '2024-09-21 22:03:11',
                'updated_at' => '2024-09-21 22:03:11',
            ),
            66 => 
            array (
                'id' => 82,
                'movie_id' => 19,
                'tag_id' => 4,
                'user_id' => 5,
                'created_at' => '2024-09-21 22:04:27',
                'updated_at' => '2024-09-21 22:04:27',
            ),
            67 => 
            array (
                'id' => 83,
                'movie_id' => 62,
                'tag_id' => 6,
                'user_id' => 2,
                'created_at' => '2024-09-21 22:13:18',
                'updated_at' => '2024-09-21 22:13:18',
            ),
            68 => 
            array (
                'id' => 84,
                'movie_id' => 62,
                'tag_id' => 18,
                'user_id' => 2,
                'created_at' => '2024-09-21 22:13:18',
                'updated_at' => '2024-09-21 22:13:18',
            ),
            69 => 
            array (
                'id' => 85,
                'movie_id' => 40,
                'tag_id' => 6,
                'user_id' => 2,
                'created_at' => '2024-09-21 22:14:36',
                'updated_at' => '2024-09-21 22:14:36',
            ),
            70 => 
            array (
                'id' => 86,
                'movie_id' => 40,
                'tag_id' => 22,
                'user_id' => 2,
                'created_at' => '2024-09-21 22:14:36',
                'updated_at' => '2024-09-21 22:14:36',
            ),
            71 => 
            array (
                'id' => 91,
                'movie_id' => 77,
                'tag_id' => 7,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:23:02',
                'updated_at' => '2024-10-01 08:23:02',
            ),
            72 => 
            array (
                'id' => 92,
                'movie_id' => 77,
                'tag_id' => 21,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:23:02',
                'updated_at' => '2024-10-01 08:23:02',
            ),
            73 => 
            array (
                'id' => 93,
                'movie_id' => 78,
                'tag_id' => 19,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:25:54',
                'updated_at' => '2024-10-01 08:25:54',
            ),
            74 => 
            array (
                'id' => 94,
                'movie_id' => 78,
                'tag_id' => 24,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:25:54',
                'updated_at' => '2024-10-01 08:25:54',
            ),
            75 => 
            array (
                'id' => 95,
                'movie_id' => 3,
                'tag_id' => 1,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:27:01',
                'updated_at' => '2024-10-01 08:27:01',
            ),
            76 => 
            array (
                'id' => 96,
                'movie_id' => 3,
                'tag_id' => 5,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:27:01',
                'updated_at' => '2024-10-01 08:27:01',
            ),
            77 => 
            array (
                'id' => 97,
                'movie_id' => 3,
                'tag_id' => 23,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:27:01',
                'updated_at' => '2024-10-01 08:27:01',
            ),
            78 => 
            array (
                'id' => 98,
                'movie_id' => 70,
                'tag_id' => 1,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:29:52',
                'updated_at' => '2024-10-01 08:29:52',
            ),
            79 => 
            array (
                'id' => 99,
                'movie_id' => 70,
                'tag_id' => 23,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:29:52',
                'updated_at' => '2024-10-01 08:29:52',
            ),
            80 => 
            array (
                'id' => 100,
                'movie_id' => 14,
                'tag_id' => 10,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:32:20',
                'updated_at' => '2024-10-01 08:32:20',
            ),
            81 => 
            array (
                'id' => 101,
                'movie_id' => 14,
                'tag_id' => 14,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:32:20',
                'updated_at' => '2024-10-01 08:32:20',
            ),
            82 => 
            array (
                'id' => 102,
                'movie_id' => 14,
                'tag_id' => 15,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:32:21',
                'updated_at' => '2024-10-01 08:32:21',
            ),
            83 => 
            array (
                'id' => 103,
                'movie_id' => 79,
                'tag_id' => 25,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:39:52',
                'updated_at' => '2024-10-01 08:39:52',
            ),
            84 => 
            array (
                'id' => 104,
                'movie_id' => 80,
                'tag_id' => 9,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:42:51',
                'updated_at' => '2024-10-01 08:42:51',
            ),
            85 => 
            array (
                'id' => 105,
                'movie_id' => 80,
                'tag_id' => 11,
                'user_id' => 1,
                'created_at' => '2024-10-01 08:42:51',
                'updated_at' => '2024-10-01 08:42:51',
            ),
            86 => 
            array (
                'id' => 106,
                'movie_id' => 84,
                'tag_id' => 14,
                'user_id' => 1,
                'created_at' => '2024-10-01 09:55:30',
                'updated_at' => '2024-10-01 09:55:30',
            ),
            87 => 
            array (
                'id' => 107,
                'movie_id' => 99,
                'tag_id' => 8,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:22:38',
                'updated_at' => '2024-10-01 10:22:38',
            ),
            88 => 
            array (
                'id' => 108,
                'movie_id' => 99,
                'tag_id' => 14,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:22:38',
                'updated_at' => '2024-10-01 10:22:38',
            ),
            89 => 
            array (
                'id' => 109,
                'movie_id' => 91,
                'tag_id' => 1,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:27:16',
                'updated_at' => '2024-10-01 10:27:16',
            ),
            90 => 
            array (
                'id' => 110,
                'movie_id' => 91,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:27:16',
                'updated_at' => '2024-10-01 10:27:16',
            ),
            91 => 
            array (
                'id' => 111,
                'movie_id' => 52,
                'tag_id' => 1,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:30:21',
                'updated_at' => '2024-10-01 10:30:21',
            ),
            92 => 
            array (
                'id' => 112,
                'movie_id' => 52,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-10-01 10:30:21',
                'updated_at' => '2024-10-01 10:30:21',
            ),
            93 => 
            array (
                'id' => 113,
                'movie_id' => 58,
                'tag_id' => 4,
                'user_id' => 4,
                'created_at' => '2024-10-01 11:01:48',
                'updated_at' => '2024-10-01 11:01:48',
            ),
            94 => 
            array (
                'id' => 116,
                'movie_id' => 139,
                'tag_id' => 3,
                'user_id' => 1,
                'created_at' => '2024-10-10 10:52:30',
                'updated_at' => '2024-10-10 10:52:30',
            ),
            95 => 
            array (
                'id' => 117,
                'movie_id' => 139,
                'tag_id' => 4,
                'user_id' => 1,
                'created_at' => '2024-10-10 10:52:30',
                'updated_at' => '2024-10-10 10:52:30',
            ),
            96 => 
            array (
                'id' => 120,
                'movie_id' => 138,
                'tag_id' => 14,
                'user_id' => 1,
                'created_at' => '2024-10-10 10:54:29',
                'updated_at' => '2024-10-10 10:54:29',
            ),
            97 => 
            array (
                'id' => 121,
                'movie_id' => 118,
                'tag_id' => 6,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:08:09',
                'updated_at' => '2024-10-10 11:08:09',
            ),
            98 => 
            array (
                'id' => 122,
                'movie_id' => 118,
                'tag_id' => 17,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:08:09',
                'updated_at' => '2024-10-10 11:08:09',
            ),
            99 => 
            array (
                'id' => 123,
                'movie_id' => 133,
                'tag_id' => 22,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:10:14',
                'updated_at' => '2024-10-10 11:10:14',
            ),
            100 => 
            array (
                'id' => 124,
                'movie_id' => 133,
                'tag_id' => 26,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:10:14',
                'updated_at' => '2024-10-10 11:10:14',
            ),
            101 => 
            array (
                'id' => 125,
                'movie_id' => 127,
                'tag_id' => 5,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:11:41',
                'updated_at' => '2024-10-10 11:11:41',
            ),
            102 => 
            array (
                'id' => 126,
                'movie_id' => 127,
                'tag_id' => 25,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:11:41',
                'updated_at' => '2024-10-10 11:11:41',
            ),
            103 => 
            array (
                'id' => 127,
                'movie_id' => 108,
                'tag_id' => 4,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:13:13',
                'updated_at' => '2024-10-10 11:13:13',
            ),
            104 => 
            array (
                'id' => 128,
                'movie_id' => 103,
                'tag_id' => 1,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:15:05',
                'updated_at' => '2024-10-10 11:15:05',
            ),
            105 => 
            array (
                'id' => 129,
                'movie_id' => 103,
                'tag_id' => 8,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:15:05',
                'updated_at' => '2024-10-10 11:15:05',
            ),
            106 => 
            array (
                'id' => 130,
                'movie_id' => 103,
                'tag_id' => 12,
                'user_id' => 4,
                'created_at' => '2024-10-10 11:15:05',
                'updated_at' => '2024-10-10 11:15:05',
            ),
            107 => 
            array (
                'id' => 133,
                'movie_id' => 120,
                'tag_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:17:52',
                'updated_at' => '2024-10-10 11:17:52',
            ),
            108 => 
            array (
                'id' => 134,
                'movie_id' => 120,
                'tag_id' => 11,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:17:52',
                'updated_at' => '2024-10-10 11:17:52',
            ),
            109 => 
            array (
                'id' => 135,
                'movie_id' => 140,
                'tag_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:19:35',
                'updated_at' => '2024-10-10 11:19:35',
            ),
            110 => 
            array (
                'id' => 136,
                'movie_id' => 124,
                'tag_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:21:00',
                'updated_at' => '2024-10-10 11:21:00',
            ),
            111 => 
            array (
                'id' => 137,
                'movie_id' => 124,
                'tag_id' => 12,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:21:00',
                'updated_at' => '2024-10-10 11:21:00',
            ),
            112 => 
            array (
                'id' => 138,
                'movie_id' => 135,
                'tag_id' => 8,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:26:03',
                'updated_at' => '2024-10-10 11:26:03',
            ),
            113 => 
            array (
                'id' => 139,
                'movie_id' => 135,
                'tag_id' => 26,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:26:03',
                'updated_at' => '2024-10-10 11:26:03',
            ),
            114 => 
            array (
                'id' => 140,
                'movie_id' => 110,
                'tag_id' => 5,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:27:22',
                'updated_at' => '2024-10-10 11:27:22',
            ),
            115 => 
            array (
                'id' => 141,
                'movie_id' => 110,
                'tag_id' => 21,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:27:22',
                'updated_at' => '2024-10-10 11:27:22',
            ),
            116 => 
            array (
                'id' => 142,
                'movie_id' => 122,
                'tag_id' => 5,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:30:40',
                'updated_at' => '2024-10-10 11:30:40',
            ),
            117 => 
            array (
                'id' => 143,
                'movie_id' => 122,
                'tag_id' => 20,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:30:40',
                'updated_at' => '2024-10-10 11:30:40',
            ),
            118 => 
            array (
                'id' => 144,
                'movie_id' => 122,
                'tag_id' => 21,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:30:40',
                'updated_at' => '2024-10-10 11:30:40',
            ),
            119 => 
            array (
                'id' => 145,
                'movie_id' => 74,
                'tag_id' => 6,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:31:29',
                'updated_at' => '2024-10-10 11:31:29',
            ),
            120 => 
            array (
                'id' => 146,
                'movie_id' => 74,
                'tag_id' => 19,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:31:29',
                'updated_at' => '2024-10-10 11:31:29',
            ),
            121 => 
            array (
                'id' => 147,
                'movie_id' => 74,
                'tag_id' => 24,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:31:29',
                'updated_at' => '2024-10-10 11:31:29',
            ),
            122 => 
            array (
                'id' => 149,
                'movie_id' => 113,
                'tag_id' => 6,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:33:28',
                'updated_at' => '2024-10-10 11:33:28',
            ),
            123 => 
            array (
                'id' => 150,
                'movie_id' => 113,
                'tag_id' => 24,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:33:28',
                'updated_at' => '2024-10-10 11:33:28',
            ),
            124 => 
            array (
                'id' => 151,
                'movie_id' => 40,
                'tag_id' => 6,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:44:29',
                'updated_at' => '2024-10-10 11:44:29',
            ),
            125 => 
            array (
                'id' => 152,
                'movie_id' => 40,
                'tag_id' => 26,
                'user_id' => 1,
                'created_at' => '2024-10-10 11:44:29',
                'updated_at' => '2024-10-10 11:44:29',
            ),
            126 => 
            array (
                'id' => 153,
                'movie_id' => 103,
                'tag_id' => 21,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:46:40',
                'updated_at' => '2024-10-10 11:46:40',
            ),
            127 => 
            array (
                'id' => 154,
                'movie_id' => 103,
                'tag_id' => 23,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:46:40',
                'updated_at' => '2024-10-10 11:46:40',
            ),
            128 => 
            array (
                'id' => 155,
                'movie_id' => 117,
                'tag_id' => 4,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:50:44',
                'updated_at' => '2024-10-10 11:50:44',
            ),
            129 => 
            array (
                'id' => 156,
                'movie_id' => 117,
                'tag_id' => 22,
                'user_id' => 2,
                'created_at' => '2024-10-10 11:50:44',
                'updated_at' => '2024-10-10 11:50:44',
            ),
        ));
        
        
    }
}