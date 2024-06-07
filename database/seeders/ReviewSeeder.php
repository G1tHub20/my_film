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
        ]);
    }
}
