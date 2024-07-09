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
                'original_title' => 'トリック劇場版',
                'overview' => 'ある日、奈緒子は災いが起こると言い伝えられる村で「神を演じてほしい」と依頼を受ける。しかし村には自称「神」を名乗る3人の男が待っていた…。',
                'release_year' => 2002,
                'director' => '堤幸彦',
                'country_id' => 1,
                'image1' => '/tt84MQlU6RCMI00jOxIx8jxQfes.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マッドマックス　フュリオサ',
                'original_title' => 'Furiosa: A Mad Max Saga',
                'overview' => '世界崩壊から45年。バイカー軍団に連れ去られ、すべてを奪われた若きフュリオサは故郷への帰還を誓い、MADな世界（マッドワールド）に対峙する——巨大なバイカー軍団、その頂点ディメンタス将軍は可愛い熊の人形を引っさげ改造バイクで絶叫し、さらには、白塗りの兵隊ウォーボーイズたちが神と崇めるイモータン・ジョーは鉄壁の要塞を牛耳り、互いが覇権を争っていた。生き残れるのは狂った奴だけ。怒りの戦士フュリオサよ、復讐のエンジンを鳴らせ！',
                'release_year' => 2024,
                'director' => 'ジョージ・ミラー',
                'country_id' => 2,
                'image1' => '/raph7qjAGTMXaIjVxt6ZDSXRzUr.jpg',
                'image2' => '/uk3xNoCirHkbcfUbgH5UISI23De.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'シンドラーのリスト',
                'original_title' => "Schindler's List",
                'overview' => '1939年、ポーランド南部の都市クラクフにドイツ軍が侵攻した。ドイツ人実業家のオスカー・シンドラーは、一旗揚げようとこの街にやって来た。彼は 金にものを言わせて巧みに軍の幹部たちに取り入り、ユダヤ人の所有していた工場を払い下げてもらう。ユダヤ人会計士のイツァーク・シュテルンをパートナーに選んだシンドラーは、軍用ホーロー容器の事業を始める。41年3月、ユダヤ人たちは壁に囲まれたゲットー（居住区）に住むことを義務づけられる。シュテルンの活躍で、ゲットーのユ ダヤ人たちが無償の労働力として、シンドラーの工場に続々と集められ事業はたちまち軌道に乗る。',
                'release_year' => 1994,
                'director' => 'スティーブン・スピルバーグ',
                'country_id' => 2,
                'image1' => '/zb6fM1CX41D9rF9hdgclu0peUmy.jpg',
                'image2' => '/ei5xjikx59WR2oDFl2lNLbtQHkx.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'ハリー・ポッターと賢者の石',
                'original_title' => "Harry Potter and the Philosopher's Stone",
                'overview' => '両親の死後、親戚の家に預けられたハリー・ポッター少年。そこでは階段下の物置部屋をあてがわれ、何かとこき使われる毎日。そんなある日、ハリー の11歳の誕生日に一通の手紙が届いた。中身はなんと、魔法魔術学校の入学許可証だった。実は、ハリーの両親は優秀な魔法使いだったのだ。手紙に導かれるままホグワーツ魔法魔術学校にたどり着いたハリーは、さっそく魔法使いになるための勉強を始める。ロンとハーマイオニーという友達もでき、楽しい毎日を送るハリーだったが、やがて学校に隠された驚くべき秘密に気づくのだった……。',
                'release_year' => 2001,
                'director' => 'クリス・コロンバス',
                'country_id' => 2,
                'image1' => '/pXvDfEB5kA4cZJ2S2zTXg8cKTsK.jpg',
                'image2' => '/dK3WWZCwInfpCG5BMpKagcchJDi.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'トイ・ストーリー', //id=5
                'original_title' => 'Toy Story',
                'overview' => 'カウボーイ人形のウッディはアンディ少年の大のお気に入り。だがそれも誕生日プレゼントでアクション人形バズ・ライトイヤーを手にするまでの事だ った。NO．1の座を奪われたウッディは何とかバズをこらしめようとするが、バズはバズで自分が本物のスペース・レンジャーだと思い込んでいる有り様。そんな二人がふと したいざこざから外の世界に飛び出してしまう。なんとか我が家へ帰還しようとする二人だが、なんとアンディの隣に住む悪ガキのシドに捕まってしまった……。',
                'release_year' => 1995,
                'director' => 'ジョン・ラセター',
                'country_id' => 2,
                'image1' => '/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
                'image2' => '/3Rfvhy1Nl6sSGJwyjb0QiZzZYlB.jpg',
                'created_at' => Now()
            ],            
        ]);
    }
}
