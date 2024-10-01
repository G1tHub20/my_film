<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag' => '泣ける',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tag' => '笑える',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tag' => '最強',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tag' => 'かっこいい',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tag' => '心温まる',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tag' => '映像美',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tag' => '音楽がいい',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tag' => 'ちょっと怖い',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tag' => '恐怖',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tag' => 'かわいい',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tag' => 'ハラハラする',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tag' => '演技力がすごい',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tag' => 'リアル',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tag' => '考えさせれる',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tag' => '家族で見れる',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tag' => '映画賞受賞',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tag' => 'ド派手なアクション',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tag' => '不朽の名作',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tag' => '旅に出たくなる',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tag' => '万人受けする',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tag' => '青春',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tag' => '隠れた名作',
                'created_at' => '2024-08-27 08:47:52',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tag' => 'ノンフィクション',
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tag' => 'もう一度観たい',
                'created_at' => '2024-09-28 19:43:51',
                'updated_at' => '2024-09-28 19:43:51',
            ),
            24 => 
            array (
                'id' => 25,
                'tag' => '脚本がいい',
                'created_at' => '2024-10-01 08:39:52',
                'updated_at' => '2024-10-01 08:39:52',
            ),
        ));
        
        
    }
}