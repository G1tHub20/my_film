<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // 多対1（従から主のレコードを取り出す）
    public function country()
    {
       return $this->belongsTo('App\Models\Country');
    }

    // 多対多（中間テーブルを介する）
    public function genres()
    {   //('関係するモデル', '中間テーブル', '中間テーブル外部キー', '中間テーブル外部キー(関係するモデル)');
        return $this->belongsToMany('App\Models\Genre', 'genre_movie', 'movie_id', 'genre_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'movie_tag', 'movie_id', 'tag_id');
    }

    // 1対多（主から従のレコードを取り出す）
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
    public function genreMovie()
    {
        return $this->hasMany('App\Models\GenreMovie');
    }

    // ローカルスコープ(頭にscopeを付け、第一引数$queryで定義、呼出時はscopeプレフィックスなし)
    // アプリ全体で再利用できる共通のクエリ制約を定義できる
    public function scopeSearch($query, $title, $release_year, $director, $country_id, $genre_id)
    {
        if($title != null) {
            $title_split = mb_convert_kana($title, 's'); //全角空白を半角に変換
            $title_split2 = preg_split('/[\s]+/', $title_split); //空白で区切る
            foreach($title_split2 as $value) {
                $query->where('title', 'like', '%' . $value . '%'); //WHERE句に条件を追加していく
            }
        }
            
        if($release_year != null) {
            $query->where('release_year', '=', $release_year);
        }
        if($country_id != null) {
            $query->where('country_id', '=', $country_id);
        }
        if($director != null) {
            $query->where('director', '=', $director);
        }
        if($genre_id != null) {
            // GenreMovieを参照
            $query = $query->whereHas('GenreMovie', function($q)use($genre_id) { //whereHas リレーション先のテーブルの条件で検索
                $q->where('genre_id', $genre_id);                                //useメソッドを使用するとクロージャの中で変数が使える
            });

            // $query->where('genre', '=', $genre);
        }
        
        return $query;
    }

    // public function scopeSearch2($query, $id)
    // {
    //     if($id != null) {
    //         $query->where('id', '=', $id);
    //     }
        
    //     return $query;
    // }
}