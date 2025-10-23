<?php

namespace App\Services;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class RatingService
{
  /**
   * 映画の平均評価を計算する
   *
   * @param int $movieId
   * @return float 平均評価（小数点第2位まで）
   */
  public function calculateAverageRating(int $movieId): float
  {
      $rating = Review::where('movie_id', $movieId)->avg('rating');

      return $rating ? floor($rating * 100) / 100 : 0.0;
  }

  /**
   * 複数映画の評価を一括計算する
   * 
   * @param Collection $movies
   * @return array 映画IDと評価の連想配列
   */
  public function calculateBulkAverageRatings(Collection $movies): array
  {
      $movieIds = $movies->pluck('id')->toArray();
      
      // 1回のクエリで全映画の評価を取得
      $ratings = Review::whereIn('movie_id', $movieIds)
          ->selectRaw('movie_id, AVG(rating) as avg_rating')
          ->groupBy('movie_id')
          ->pluck('avg_rating', 'movie_id')
          ->toArray();
      
      // 評価がない映画は0.0を設定
      $result = [];
      foreach ($movieIds as $movieId) {
          $rating = $ratings[$movieId] ?? 0.0;
          $result[$movieId] = $rating ? floor($rating * 100) / 100 : 0.0;
      }
      
      return $result;
  }

  /**
   * N+1問題を解消した評価付与メソッド
   * 
   * @param Collection $movies
   * @return Collection 評価を付与した映画のコレクション
   */
  public function attachRatingsToMoviesOptimized(Collection $movies): Collection
  {
      $ratings = $this->calculateBulkAverageRatings($movies);
      
      foreach ($movies as $movie) {
          $movie->setAttribute('rating', $ratings[$movie->id] ?? 0.0);
      }
      
      return $movies;
  }

  /**
   * 最新レビュー映画を評価付きで取得する
   * 
   * @param int $limit 取得する映画の数
   * @return Collection 評価を付与した最新レビュー映画のコレクション
   */
  public function getLatestReviewedMoviesWithRatings(int $limit = 10): Collection
  {
      $movieIds = Review::select('movie_id', DB::raw('MAX(updated_at) as latest_update'))
          ->groupBy('movie_id')
          ->orderBy('latest_update', 'DESC')
          ->limit($limit)
          ->pluck('movie_id')
          ->toArray();
          
      $movies = Movie::whereIn('id', $movieIds)->get();
      return $this->attachRatingsToMoviesOptimized($movies);
  }

}