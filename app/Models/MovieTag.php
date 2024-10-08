<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieTag extends Model
{
    use HasFactory;
    protected $table = 'movie_tag'; //中間テーブルの複数形を呼びそうとする対策
    
    // Movie(1) 対 Movie_Tag(多)
    public function movie()
    {
        // return $this->belongsTo('App\Models\Movie');
        return $this->belongsTo(Movie::class); //クラスの完全修飾クラス名（FQCN）を文字列として返す
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
