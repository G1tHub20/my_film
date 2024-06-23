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
                'country_id' => 1,
                'image1' => '/tt84MQlU6RCMI00jOxIx8jxQfes.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マッドマックス　フュリオサ',
                'overview' => '世界が崩壊する中、若きフュリオサは "緑の母なる場所 "からさらわれ、ウォーロード・デメンタス率いるバイカーの大群の手に落ちる。荒地を掃討する彼らは、イモータン・ジョーが統べる城塞都市に出くわす。2人のタイラントが覇権をめぐって争う中、フュリオサは数々の試練を乗り越え、故郷への道を探さなければならない。',
                'release_year' => 2024,
                'director_id' => 1,
                'country_id' => 2,
                'image1' => '/raph7qjAGTMXaIjVxt6ZDSXRzUr.jpg',
                'image2' => '/uk3xNoCirHkbcfUbgH5UISI23De.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'シンドラーのリスト',
                'overview' => '実業家オスカー・シンドラーが、第二次世界大戦中、彼の工場で奴隷として働いていた1000人以上のユダヤ人の命をナチスから救った実話。',
                'release_year' => 1994,
                'director_id' => 3,
                'country_id' => 2,
                'image1' => '/zb6fM1CX41D9rF9hdgclu0peUmy.jpg',
                'image2' => '/ei5xjikx59WR2oDFl2lNLbtQHkx.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'ハリー・ポッターと賢者の石',
                'overview' => 'ハリー・ポッターは、叔父と叔母の家の階段の下で暮らしてきた。しかし11歳の誕生日、ハリーは自分が強力な魔法使いであり、ホグワーツ魔法魔術学校に入学できることを知る。ホグワーツ魔法魔術学校の親切な校長の助けを借りながら、ハリーは新しい力の使い方を学ぶうちに、両親の死の真相と、その罪を着せた悪役の正体を突き止める。',
                'release_year' => 2001,
                'director_id' => 4,
                'country_id' => 2,
                'image1' => '/pXvDfEB5kA4cZJ2S2zTXg8cKTsK.jpg',
                'image2' => '/dK3WWZCwInfpCG5BMpKagcchJDi.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'トイ・ストーリー',
                'overview' => 'アンディの誕生日にバズ・ライトイヤーが登場するまで、ウッディを筆頭に、アンディのおもちゃたちは彼の部屋で幸せに暮らしていた。アンディの心の中に自分の居場所を失うことを恐れたウッディは、バズを敵視する。しかし、バズとウッディが飼い主から引き離されたとき、ふたりはやがて仲たがいすることを学ぶ。',
                'release_year' => 1995,
                'director_id' => 5,
                'country_id' => 2,
                'image1' => '/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
                'image2' => '/3Rfvhy1Nl6sSGJwyjb0QiZzZYlB.jpg',
                'created_at' => Now()
            ],
        ]);
    }
}
