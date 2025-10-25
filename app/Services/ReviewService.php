<?php

namespace App\Services;

use App\Models\Review;
use App\Models\Movie;
use App\Models\User;
use App\Models\Tag;
use App\Models\MovieTag;
use App\Http\Requests\StoreMovieForm;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class ReviewService
{
    /**
     * 映画のレビューをユーザー名付きで取得
     *
     * @param int $movieId
     * @return Collection レビューのコレクション
     */
    public function getMovieReviewsWithUserNames($movieId): Collection
    {
        $movie = Movie::find($movieId);
        if (!$movie) {
            return collect();
        }

        $reviews = $movie->reviews->sortByDesc('id');
        
        // ユーザーIDを一括取得してN+1問題を解消
        $userIds = $reviews->pluck('user_id')->unique();
        $users = User::whereIn('id', $userIds)->pluck('name', 'id');
        
        foreach ($reviews as $review) {
            $review->setAttribute('name', $users[$review->user_id] ?? '不明');
        }

        return $reviews;
    }

    /**
     * ユーザーが既にレビューを投稿しているかチェック
     *
     * @param int $movieId
     * @param int $userId
     * @return bool
     */
    public function hasUserPostedReview($movieId, $userId): bool
    {
        $count = Review::where('movie_id', '=', $movieId)
                      ->where('user_id', '=', $userId)
                      ->count();
        return $count > 0;
    }

    /**
     * ユーザーの既存レビューを取得
     *
     * @param int $movieId
     * @param int $userId
     * @return Review|null
     */
    public function getUserReview($movieId, $userId): ?Review
    {
        return Review::where('movie_id', '=', $movieId)
                    ->where('user_id', '=', $userId)
                    ->first();
    }

    /**
     * ユーザーの既存タグIDを取得
     *
     * @param int $movieId
     * @param int $userId
     * @return array タグIDの配列
     */
    public function getUserTagIds($movieId, $userId): array
    {
        return MovieTag::where('movie_id', '=', $movieId)
                      ->where('user_id', '=', $userId)
                      ->pluck('tag_id')
                      ->all();
    }

    /**
     * レビューを作成する
     *
     * @param StoreMovieForm $request
     * @return Review
     */
    public function createReview(StoreMovieForm $request): Review
    {
        $review = new Review;
        $review->user_id = $request->input('user_id');
        $review->movie_id = $request->input('movie_id');
        $review->rating = $request->input('rating');
        $review->comment = $request->input('comment');
        $review->save();

        // タグの処理
        $this->processReviewTags($request, $request->input('movie_id'), $request->input('user_id'));

        return $review;
    }

    /**
     * レビューを更新する
     *
     * @param StoreMovieForm $request
     * @return Review
     */
    public function updateReview(StoreMovieForm $request): Review
    {
        $userId = $request->input('user_id');
        $movieId = $request->input('movie_id');

        $review = Review::where('movie_id', '=', $movieId)
                       ->where('user_id', '=', $userId)
                       ->first();

        $review->user_id = $userId;
        $review->movie_id = $movieId;
        $review->rating = $request->input('rating');
        $review->comment = $request->input('comment');
        $review->save();

        // 既存タグを削除してから新しいタグを処理
        MovieTag::where('movie_id', '=', $movieId)
               ->where('user_id', '=', $userId)
               ->delete();

        $this->processReviewTags($request, $movieId, $userId);

        return $review;
    }

    /**
     * レビューを削除する
     *
     * @param int $movieId
     * @param int $userId
     * @return void
     */
    public function deleteReview($movieId, $userId): void
    {
        // タグ（MovieTag）を削除
        MovieTag::where('movie_id', $movieId)->where('user_id', $userId)->delete();
        
        // レビューを削除
        Review::where('movie_id', $movieId)->where('user_id', $userId)->delete();
    }

    /**
     * レビューに関連するタグを処理する（共通処理）
     *
     * @param StoreMovieForm $request
     * @param int $movieId
     * @param int $userId
     * @return void
     */
    private function processReviewTags(StoreMovieForm $request, $movieId, $userId): void
    {
        $insertedId = [];
        
        // 新規タグの作成
        foreach ($request->input('newTag') as $newTag) {
            if (!empty($newTag)) {
                $tag = new Tag;
                $tag->tag = $newTag;
                $tag->save();
                array_push($insertedId, $tag->id); //登録したタグのidを次処理で使うため配列に格納
            }
        }

        // タグの関連付け
        if (!empty($request->input('tag')) || !empty($insertedId)) {
            $tags = [];
            
            // リストから選択されたタグ
            if (!empty($request->input('tag'))) {
                $tags = $request->input('tag');
            }
            
            // 新規作成されたタグ
            if (!empty($insertedId)) {
                foreach ($insertedId as $i) {
                    array_push($tags, strval($i));
                }
            }

            // MovieTagテーブルに保存
            foreach ($tags as $tag) {
                $movieTag = new MovieTag;
                $movieTag->movie_id = $movieId;
                $movieTag->tag_id = $tag;
                $movieTag->user_id = $userId;
                $movieTag->save();
            }
        }
    }

    /**
     * 映画のタグをカウント数付きで取得
     *
     * @param int $movieId
     * @return Collection タグのコレクション（カウント数の降順）
     */
    public function getMovieTagsWithCount($movieId): Collection
    {
        $movie = Movie::find($movieId);
        if (!$movie) {
            return collect();
        }

        return $movie->tags()
            ->select('tags.id', 'tags.tag', DB::raw('COUNT(movie_tag.tag_id) as tag_count'))
            ->groupBy('tags.id', 'tags.tag', 'movie_tag.movie_id', 'movie_tag.tag_id')
            ->orderBy('tag_count', 'desc')
            ->get();
    }

}
