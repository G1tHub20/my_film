<?php

namespace App\Services;

use App\Models\Movie;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Tag;
use App\Services\RatingService;

class SearchService
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    /**
     * 検索結果一覧用の映画データ取得
     * 
     * @param Request $request
     * @return array 映画データの配列
     */
    public function searchMoviesWithDetails($request)
    {
        $title = $request->title;
        $release_year = $request->release_year;
        $country_id = $request->country;
        $director = $request->director;
        $tag_ids = $request->tag;
        $genre_id = $request->genre;

        // 検索クエリの構築
        $query = Movie::search($title, $release_year, $director, $country_id, $genre_id);
        // Eager Loadingで関連するデータを事前に読み込む
        //  withメソッドの引数にはリレーションメソッド名を指定
        $query
            ->with('country') //Movieのcountryメソッドを呼び出す
            ->with('genres')
            ->select('id','title','release_year','director','country_id')
            ->sortable(); //ソート機能を実装

        // タグを持つ映画を絞り込み（AND条件）
        if (!empty($tag_ids) && count($tag_ids) > 0) {
            foreach ($tag_ids as $tag_id) {
                $query->whereHas('tags', function ($q) use ($tag_id) {
                    $q->where('tag_id', $tag_id);
                });
            }
        }

        $movies = $query->get(); //getメソッド 結果をコレクションとして取得

        // 評価を一括付与
        $movies = $this->ratingService->attachRatingsToMoviesOptimized($movies);

        // カスタムソート: ratingでソート
        $sort = $request->input('sort', 'id');
        $direction = $request->input('direction', 'asc');
        if ($sort === 'rating') {
            $movies = $direction === 'desc' ? $movies->sortByDesc('rating') : $movies->sortBy('rating');
        } else {
            $movies = $direction === 'desc' ? $movies->sortByDesc($sort) : $movies->sortBy($sort);
        }

        // ジャンル情報の構築
        $movies->load('genres');
        $genres = [];
        foreach ($movies as $movie) {
            foreach ($movie->genres as $genre) {
                $genres[$movie->id][$genre->id] = $genre->genre;
            }
        }

        // 検索条件表示文字列の生成
        $search_params = [];
        if(!is_null($title)) {
            array_push($search_params, "\"" . $title . "\"");
        }
        if(!is_null($release_year)) {
            array_push($search_params, $release_year . "年");
        }
        if(!is_null($genre_id)) {
            $genre = Genre::find($genre_id);
            array_push($search_params, $genre->genre);
        }
        if(!is_null($director)) {
            array_push($search_params, $director);
        }
        if(!is_null($country_id)) {
            $country = Country::find($country_id);
            array_push($search_params, $country->country);
        }
        if(!is_null($tag_ids)) {
            $tags = Tag::whereIn('id', $tag_ids)->pluck('tag')->toArray();
            $tag = "\"" . implode( " & ", $tags) . "\"";
            array_push($search_params, $tag);
        }
        $search_param = implode( ",　", $search_params);

        return compact('movies', 'genres', 'search_param');
    }

    /**
     * トップページ用の映画データ取得
     * 
     * @return array 映画データの配列
     */
    public function getMoviesForIndex()
    {
        $movies = $this->ratingService->getLatestReviewedMoviesWithRatings(10);

        // ジャンル情報を構築
        $genres = [];
        foreach ($movies as $movie) {
            foreach ($movie->genres as $genre) {
                $genres[$movie->id][$genre->id] = $genre->genre;
            }
        }

        return compact('movies', 'genres');
        }

    /**
     * 検索用オプションデータ取得
     * 
     * @return array オプションデータの配列
     */
    public function getOptionsForSearch()
    {
        return [
            'tags' => Tag::all(),
            'genre_names' => Genre::orderBy('id')->get(),
            'release_year' => Movie::distinct()->orderBy('release_year', 'desc')->pluck('release_year'),
            'directors' => Movie::distinct()->orderBy('director')->pluck('director'),
            'countries' => Country::orderBy('id')->get()
        ];
    }

}