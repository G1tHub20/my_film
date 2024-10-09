<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function movie()
    {
        // 従テーブルから関連する主テーブルのレコードを取り出す
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function user()
    {
        // 従テーブルから関連する主テーブルのレコードを取り出す
        return $this->belongsTo(User::class, 'user_id');
    }
}
