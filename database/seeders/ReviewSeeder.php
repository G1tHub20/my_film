<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'movie_id' => 1,
                'user_id' => 1,
                'comment' => '3点。テレビシリーズも全部見たこの作品。映画になっても同じように面白かった。わざわざ映画でなくてもＴＶと同等内容だった気もするが・・',
                'rating' => 3,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 1,
                'user_id' => 2,
                'comment' => 'マジで。阿部さん好き女の子も、脇役も',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 2,
                'user_id' => 2,
                'comment' => 'フュリオサ観てから鑑賞。あれは前日弾とはいえど、結構近い過去だったりするのかな？ちゃんとシリーズとして楽しめるのが良かった。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 3,
                'user_id' => 1,
                'comment' => '先日観た関心領域より、ずっと前の本作ですが初めて観賞。ナチス幹部の残虐さに衝撃。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 3,
                'user_id' => 2,
                'comment' => 'シンドラーは決して聖人ではなかった。ユダヤ人を利用しお金を稼ぎ、女、酒を嗜む。そんな彼を動かすほどの、ナチスによるむごたらし情景には何度も目を背けたくなった。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 4,
                'user_id' => 1,
                'comment' => '何度も見たことはあるんだけどいつもながら見でちゃんと観れてなかったけど今回はちゃんと見切った。魔法使いってワクワクだしそんな学校での生活みてるの楽しすぎた！',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
            ],
            [
                'movie_id' => 5,
                'user_id' => 4,
                'comment' => '心温まるストーリーとユーモア。全世代が楽しめるピクサーの不朽の名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:22:23',
            ],
            [
                'movie_id' => 2,
                'user_id' => 4,
                'comment' => '視覚効果とアクションが圧巻。世界観も魅力的でエンターテイメント性が高い。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:23:11',
            ],
            [
                'movie_id' => 1,
                'user_id' => 4,
                'comment' => 'ユニークなキャラクターとトリックが楽しいが、展開が少し予想通り。ファンには満足の一本。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:23:38',
            ],
            [
                'movie_id' => 3,
                'user_id' => 4,
                'comment' => '感動的なストーリーと卓越した演技。歴史を深く考えさせられる傑作だが、やや重いテーマ。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:27:12',
            ],
            [
                'movie_id' => 4,
                'user_id' => 4,
                'comment' => '魔法の世界に引き込まれる冒険。ファンタジーの魅力を存分に味わえる始まりの一作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:27:53',
            ],
            [
                'movie_id' => 25,
                'user_id' => 4,
                'comment' => '美しいアニメーションと独特なキャラクター。ストーリーが少し複雑だが魅力的。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:28:38',
            ],
            [
                'movie_id' => 26,
                'user_id' => 4,
                'comment' => '冒険とユーモアが詰まったエンターテイメント。ジョニー・デップの演技が光る。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:29:25',
            ],
            [
                'movie_id' => 31,
                'user_id' => 4,
                'comment' => '圧倒的な映像美と感動的なラブストーリー。歴史とドラマを見事に融合させた名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:30:01',
            ],
            [
                'movie_id' => 33,
                'user_id' => 4,
                'comment' => '緊張感あるストーリー展開と強烈な結末。サスペンス好きにはたまらない一作。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:30:54',
            ],
            [
                'movie_id' => 43,
                'user_id' => 4,
                'comment' => 'タイムトラベルの魅力が詰まったSFの名作。ユーモアとアドベンチャーの完璧なバランス。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:31:26',
            ],
            [
                'movie_id' => 69,
                'user_id' => 4,
                'comment' => '限られた空間での緊迫感とサスペンスが秀逸。ハラハラドキドキの展開に引き込まれる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:33:46',
            ],
            [
                'movie_id' => 70,
                'user_id' => 4,
                'comment' => '実話を基にした感動の物語。心に響くストーリーと優れた演技が光る。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:34:30',
            ],
            [
                'movie_id' => 71,
                'user_id' => 4,
                'comment' => 'ユーモアとアクションが融合したエンターテイメント。笑いと興奮が絶えない作品。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:35:25',
            ],
            [
                'movie_id' => 72,
                'user_id' => 4,
                'comment' => 'インド映画特有のユーモアと感動のバランスが良い。少し長めだが、楽しめる作品。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:35:57',
            ],
            [
                'movie_id' => 66,
                'user_id' => 4,
                'comment' => '現代社会の問題を鋭く描く感動作。キャストの演技が秀逸で、深く考えさせられる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:36:16',
            ],
            [
                'movie_id' => 67,
                'user_id' => 4,
                'comment' => '心温まるストーリーと美しいアニメーション。全世代に愛されるジブリの名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:36:43',
            ],
        ]);
    }
}
