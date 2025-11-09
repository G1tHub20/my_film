<?php

namespace Tests\Feature\Services;

use App\Models\Movie;
use App\Services\RatingService;
use Tests\TestCase;

class RatingServiceTest extends TestCase
{
    public function test_calculateAverageRating_映画の平均評価を計算する()
    {
        // 1. インスタンスを生成
        $target = new RatingService();
        // 2. 期待値
        $expected = 4.66;
        // 3. 実測値
        $actual = $target->calculateAverageRating(66); 
        // 4. 検証
        $this->assertEquals($expected, $actual);
    }

    public function test_calculateBulkAverageRatings_複数映画の評価を一括計算する()
    {
        $target = new RatingService();
        $expected = [66 => 4.66, 1 => 3.66];
        $movies = Movie::whereIn('id', [66, 1])->get();
        $actual = $target->calculateBulkAverageRatings($movies);

        $this->assertEquals($expected, $actual);
    }

    public function test_attachRatingsToMoviesOptimized_評価を付与した映画のコレクションを取得する()
    {
        $target = new RatingService();
        $movies = Movie::whereIn('id', [66, 1, 22])->get();
        $actual = $target->attachRatingsToMoviesOptimized($movies);
        
        // 戻り値がCollectionであることを確認
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $actual);
        
        // 各映画にratingが付与されていることを確認
        $this->assertEquals(4.66, $actual->firstWhere('id', 66)->rating);
        $this->assertEquals(3.66, $actual->firstWhere('id', 1)->rating);
        $this->assertEquals(0.0, $actual->firstWhere('id', 22)->rating); // レビューがない映画のratingは0.0になる
    }

    public function test_getLatestReviewedMoviesWithRatings_最新のレビュー付き映画を評価付きで取得する()
    {
        $target = new RatingService();
        $actual = $target->getLatestReviewedMoviesWithRatings(3);

        // 戻り値がCollectionであることを確認
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $actual);
        
        // 取得件数が指定通りであることを確認
        $this->assertCount(3, $actual);
        
        // 各映画にratingが付与されていることを確認
        foreach ($actual as $movie) {
            $this->assertArrayHasKey('rating', $movie->toArray());
        }
    }

}
