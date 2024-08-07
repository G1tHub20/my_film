<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
               'tag' => '泣ける' ,
               'created_at' => Now()
            ],
            [
               'tag' => '笑える' ,
               'created_at' => Now()
            ],
            [
               'tag' => '最強' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'かっこいい' ,
               'created_at' => Now()
            ],
            [
               'tag' => '心温まる' ,
               'created_at' => Now()
            ],
            [
               'tag' => '映像美' ,
               'created_at' => Now()
            ],
            [
               'tag' => '音楽がいい' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'ちょっと怖い' ,
               'created_at' => Now()
            ],
            [
               'tag' => '恐怖' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'かわいい' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'ハラハラする' ,
               'created_at' => Now()
            ],
            [
               'tag' => '演技力がすごい' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'リアル' ,
               'created_at' => Now()
            ],
            [
               'tag' => '考えさせれる' ,
               'created_at' => Now()
            ],
            [
               'tag' => '家族で見れる' ,
               'created_at' => Now()
            ],
            [
               'tag' => '映画賞受賞' ,
               'created_at' => Now()
            ],
            [
               'tag' => 'ド派手なアクション' ,
               'created_at' => Now()
            ],
            [
               'tag' => '不朽の名作' ,
               'created_at' => Now()
            ],
            [
               'tag' => '旅に出たくなる' ,
               'created_at' => Now()
            ],
            [
               'tag' => '万人受けする' ,
               'created_at' => Now()
            ],
            [
               'tag' => '青春' ,
               'created_at' => Now()
            ],
            [
               'tag' => '隠れた名作' ,
               'created_at' => Now()
            ],
        ]);
    }
}
