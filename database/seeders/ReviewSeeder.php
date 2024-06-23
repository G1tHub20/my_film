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
                'review' => '3点。テレビシリーズも全部見たこの作品。映画になっても同じように面白かった。わざわざ映画でなくてもＴＶと同等内容だった気もするが・・',
                'rating' => 3,
                'created_at' => Now()
            ],
            [
                'movie_id' => 1,
                'user_id' => 2,
                'review' => 'マジで。阿部さん好き女の子も、脇役も',
                'rating' => 5,
                'created_at' => Now()
            ],
            [
                'movie_id' => 2,
                'user_id' => 2,
                'review' => 'フュリオサ観てから鑑賞。あれは前日弾とはいえど、結構近い過去だったりするのかな？ちゃんとシリーズとして楽しめるのが良かった。',
                'rating' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'user_id' => 1,
                'review' => '先日観た関心領域より、ずっと前の本作ですが初めて観賞。ナチス幹部の残虐さに衝撃。',
                'rating' => 4,
                'created_at' => Now()
            ],
            [
                'movie_id' => 3,
                'user_id' => 2,
                'review' => 'シンドラーは決して聖人ではなかった。ユダヤ人を利用しお金を稼ぎ、女、酒を嗜む。そんな彼を動かすほどの、ナチスによるむごたらし情景には何度も目を背けたくなった。',
                'rating' => 5,
                'created_at' => Now()
            ],
            [
                'movie_id' => 4,
                'user_id' => 1,
                'review' => '何度も見たことはあるんだけどいつもながら見でちゃんと観れてなかったけど今回はちゃんと見切った。魔法使いってワクワクだしそんな学校での生活みてるの楽しすぎた！',
                'rating' => 5,
                'created_at' => Now()
            ],
        ]);
    }
}
