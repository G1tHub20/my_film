<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    use HasFactory;
    protected $table = 'genre_movie'; //中間テーブルの複数形を呼びそうとする対策
    
    // Movie(1) 対 Movie_Tag(多)
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
