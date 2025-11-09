<?php

namespace Tests\Feature\Services;

use App\Services\ReviewService;
use Tests\TestCase;

class ReviewServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getMovieReviewsWithUserNames_映画のレビューをユーザー名付きで取得()
    {
        $target = new ReviewService();
        $movieId = 66;
        $actual = $target->getMovieReviewsWithUserNames($movieId);

        // 戻り値がCollectionであることを確認
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $actual);
        // レビューが取得できていることを確認（空でないことを確認）
        $this->assertGreaterThan(0, $actual->count(), '映画ID 66のレビューが存在すること');
        // 各レビューに必要な属性が存在することを確認
        foreach ($actual as $review) {
            // レビューの基本属性
            $this->assertNotNull($review->rating, '評価が存在すること');
            $this->assertNotNull($review->comment, 'コメントが存在すること');
            $this->assertNotNull($review->user_id, 'ユーザーIDが存在すること');
            // ユーザー名が付与されていることを確認
            $this->assertArrayHasKey('name', $review->getAttributes());
            // 映画IDが正しいことを確認
            $this->assertEquals($movieId, $review->movie_id);
        }
    }

    public function test_hasUserPostedReview_ユーザーが既にレビューを投稿しているかチェック()
    {
        $target = new ReviewService();
        $actual = $target->hasUserPostedReview(66, 1);
        $this->assertTrue($actual);
    }

    public function test_getUserReview_ユーザーの既存レビューを取得()
    {
        $target = new ReviewService();
        $actual = $target->getUserReview(66, 1);
        $this->assertNotNull($actual);
    }

    public function test_getUserTagIds_ユーザーの既存タグIDを取得()
    {
        $target = new ReviewService();
        $actual = $target->getUserTagIds(66, 1);
        // 戻り値が配列であることを確認
        $this->assertIsArray($actual);
        // タグが存在する場合の検証
        if (count($actual) > 0) {
            // 各要素が整数（タグID）であることを確認
            foreach ($actual as $tagId) {
                $this->assertIsInt($tagId);
                $this->assertGreaterThan(0, $tagId);
            }
        }
    }
}
