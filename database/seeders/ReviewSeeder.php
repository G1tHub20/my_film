<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'user_id' => 1,
                'comment' => '3点。テレビシリーズも全部見たこの作品。映画になっても同じように面白かった。わざわざ映画でなくてもＴＶと同等内容だった気もするが・・',
                'rating' => 3,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'user_id' => 2,
                'comment' => 'マジで。阿部さん好き女の子も、脇役も',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 2,
                'user_id' => 2,
                'comment' => 'フュリオサ観てから鑑賞。あれは前日弾とはいえど、結構近い過去だったりするのかな？ちゃんとシリーズとして楽しめるのが良かった。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 3,
                'user_id' => 1,
                'comment' => '先日観た関心領域より、ずっと前の本作ですが初めて観賞。ナチス幹部の残虐さに衝撃。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'user_id' => 2,
                'comment' => 'シンドラーは決して聖人ではなかった。ユダヤ人を利用しお金を稼ぎ、女、酒を嗜む。そんな彼を動かすほどの、ナチスによるむごたらし情景には何度も目を背けたくなった。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 4,
                'user_id' => 1,
                'comment' => '何度も見たことはあるんだけどいつもながら見でちゃんと観れてなかったけど今回はちゃんと見切った。魔法使いってワクワクだしそんな学校での生活みてるの楽しすぎた！',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 5,
                'user_id' => 4,
                'comment' => '心温まるストーリーとユーモア。全世代が楽しめるピクサーの不朽の名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:22:23',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 2,
                'user_id' => 4,
                'comment' => '視覚効果とアクションが圧巻。世界観も魅力的でエンターテイメント性が高い。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:23:11',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 1,
                'user_id' => 4,
                'comment' => 'ユニークなキャラクターとトリックが楽しいが、展開が少し予想通り。ファンには満足の一本。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:23:38',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 3,
                'user_id' => 4,
                'comment' => '感動的なストーリーと卓越した演技。歴史を深く考えさせられる傑作だが、やや重いテーマ。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:27:12',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 4,
                'user_id' => 4,
                'comment' => '魔法の世界に引き込まれる冒険。ファンタジーの魅力を存分に味わえる始まりの一作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:27:53',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 25,
                'user_id' => 4,
                'comment' => '美しいアニメーションと独特なキャラクター。ストーリーが少し複雑だが魅力的。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:28:38',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 26,
                'user_id' => 4,
                'comment' => '冒険とユーモアが詰まったエンターテイメント。ジョニー・デップの演技が光る。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:29:25',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 31,
                'user_id' => 4,
                'comment' => '圧倒的な映像美と感動的なラブストーリー。歴史とドラマを見事に融合させた名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:30:01',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 33,
                'user_id' => 4,
                'comment' => '緊張感あるストーリー展開と強烈な結末。サスペンス好きにはたまらない一作。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:30:54',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 43,
                'user_id' => 4,
                'comment' => 'タイムトラベルの魅力が詰まったSFの名作。ユーモアとアドベンチャーの完璧なバランス。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:31:26',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 69,
                'user_id' => 4,
                'comment' => '限られた空間での緊迫感とサスペンスが秀逸。ハラハラドキドキの展開に引き込まれる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:33:46',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 70,
                'user_id' => 4,
                'comment' => '実話を基にした感動の物語。心に響くストーリーと優れた演技が光る。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:34:30',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 71,
                'user_id' => 4,
                'comment' => 'ユーモアとアクションが融合したエンターテイメント。笑いと興奮が絶えない作品。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:35:25',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 72,
                'user_id' => 4,
                'comment' => 'インド映画特有のユーモアと感動のバランスが良い。少し長めだが、楽しめる作品。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:35:57',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 66,
                'user_id' => 4,
                'comment' => '現代社会の問題を鋭く描く感動作。キャストの演技が秀逸で、深く考えさせられる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:36:16',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 67,
                'user_id' => 4,
                'comment' => '心温まるストーリーと美しいアニメーション。全世代に愛されるジブリの名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:36:43',
                'updated_at' => '2024-08-27 09:14:41',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 76,
                'user_id' => 2,
                'comment' => 'シュワちゃん、大暴れという映画です。
痛快！',
                'rating' => 4,
                'created_at' => '2024-08-27 08:55:57',
                'updated_at' => '2024-08-27 08:55:57',
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 31,
                'user_id' => 2,
                'comment' => '音楽がいい！',
                'rating' => 4,
                'created_at' => '2024-08-27 08:57:47',
                'updated_at' => '2024-08-27 08:57:47',
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 46,
                'user_id' => 2,
                'comment' => '実際に画面から物が飛び出して来る様な映像に、当時は観客全体が驚き、観客がみんなで避けたりした。',
                'rating' => 3,
                'created_at' => '2024-08-27 08:59:30',
                'updated_at' => '2024-08-27 08:59:30',
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 66,
                'user_id' => 2,
                'comment' => '家族の形について考えさせられるし、血の繋がりがあるものの、他人同士の間でのドラマが、あってなおかつパラサイトみたく人間臭すぎるわけではなくちゃんとその中でも愛も感じられる映画だった。',
                'rating' => 5,
                'created_at' => '2024-08-27 09:01:00',
                'updated_at' => '2024-08-27 09:01:00',
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 75,
                'user_id' => 2,
                'comment' => '映像と脚本の優れた映画、そしてこの物語が実話を基に書かれていると思うと、主人公に感情移入してしまう。
仕事に忙殺されがちな毎日のなかで、ふと、ザックにシュラフを詰め込んで旅に出たくなる。そんな映画です。',
                'rating' => 4,
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => '2024-08-27 09:03:46',
            ),
        ));
        
        
    }
}