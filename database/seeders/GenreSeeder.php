<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            // [
            //    'genre' => 'アニメ' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ドラマ' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => '恋愛' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ホラー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => '戦争' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ミュージカル' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'スポーツ' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'SF' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => '青春' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'コメディ' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'アクション' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'アドベンチャー・冒険' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'クライム' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ドキュメンタリー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'スリラー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'サスペンス' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ファミリー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ファンタジー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ミステリー' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'パニック' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'オムニバス' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'バイオレンス' ,
            //    'created_at' => Now()
            // ],
            // [
            //    'genre' => 'ギャング・マフィア' ,
            //    'created_at' => Now()
            // ],
            [
               'id' => 12,
               'genre' => 'アドベンチャー',
               'created_at' => Now()
            ],
            [
               'id' => 14,
               'genre' => 'ファンタジー',
               'created_at' => Now()
            ],
            [
               'id' => 16,
               'genre' => 'アニメーション',
               'created_at' => Now()
            ],
            [
               'id' => 18,
               'genre' => 'ドラマ',
               'created_at' => Now()
            ],
            [
               'id' => 27,
               'genre' => 'ホラー',
               'created_at' => Now()
            ],
            [
               'id' => 28,
               'genre' => 'アクション',
               'created_at' => Now()
            ],
            [
               'id' => 35,
               'genre' => 'コメディ',
               'created_at' => Now()
            ],
            [
               'id' => 36,
               'genre' => '歴史',
               'created_at' => Now()
            ],
            [
               'id' => 37,
               'genre' => '西部劇',
               'created_at' => Now()
            ],
            [
               'id' => 53,
               'genre' => 'スリラー',
               'created_at' => Now()
            ],
            [
               'id' => 80,
               'genre' => 'クライム',
               'created_at' => Now()
            ],
            [
               'id' => 99,
               'genre' => 'ドキュメンタリー',
               'created_at' => Now()
            ],
            [
               'id' => 878,
               'genre' => 'SF',
               'created_at' => Now()
            ],
            [
               'id' => 9648,
               'genre' => 'ミステリー',
               'created_at' => Now()
            ],
            [
               'id' => 10402,
               'genre' => '音楽',
               'created_at' => Now()
            ],
            [
               'id' => 10749,
               'genre' => 'ロマンス',
               'created_at' => Now()
            ],
            [
               'id' => 10751,
               'genre' => 'ファミリー',
               'created_at' => Now()
            ],
            [
               'id' => 10752,
               'genre' => '戦争',
               'created_at' => Now()
            ],
        ]);
    }
}
