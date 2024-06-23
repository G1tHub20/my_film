<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres'; //必要？

    public function movies()
    {
        // 第1引数:関連するモデルのクラス名, 第2引数:中間テーブルの名前, 第3引数:中間テーブル内で自身の外部キーとして使用するカラム
        return $this->belongsToMany('App\Models\Movie', 'genre_movie', 'genre_id', 'movie_id');
    }
}
