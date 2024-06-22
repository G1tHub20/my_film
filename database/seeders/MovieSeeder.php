<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'トリック劇場版',
                'overview' => '300年に一度、村人に降りかかる災難。自称人気マジシャンの直子（仲間由紀恵）は、人々の不安を取り除くために神として召喚される。しかし、そこには神を装った自称神々が大勢いた。奇怪な事件が相次ぎ、直子は天才物理学者（阿部寛）や矢部刑事（生瀬勝久）と共に追い詰められる。果たして神々は実在するのか、それともチャラ男なのか？',
                'release_year' => 2002,
                'director_id' => 2,
                'distributor_id' => 1,
                'country_id' => 1,
                'created_at' => Now()
            ],
            [
                'title' => 'マッドマックス　フュリオサ',
                'overview' => '世界が崩壊する中、若きフュリオサは "緑の母なる場所 "からさらわれ、ウォーロード・デメンタス率いるバイカーの大群の手に落ちる。荒地を掃討する彼らは、イモータン・ジョーが統べる城塞都市に出くわす。2人のタイラントが覇権をめぐって争う中、フュリオサは数々の試練を乗り越え、故郷への道を探さなければならない。',
                'release_year' => 2024,
                'director_id' => 1,
                'distributor_id' => 2,
                'country_id' => 2,
                'created_at' => Now()
            ],
            [
                'title' => 'てすとマッド',
                'overview' => '',
                'release_year' => 1999,
                'director_id' => 2,
                'distributor_id' => 1,
                'country_id' => 1,
                'created_at' => Now()
            ],
            [
                'title' => 'シンドラーのリスト',
                'overview' => '実業家オスカー・シンドラーが、第二次世界大戦中、彼の工場で奴隷として働いていた1000人以上のユダヤ人の命をナチスから救った実話。',
                'release_year' => 1994,
                'director_id' => 3,
                'distributor_id' => 3,
                'country_id' => 1 ,
                'created_at' => Now()
            ],
        ]);
    }
}
