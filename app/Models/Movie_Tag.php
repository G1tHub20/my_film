<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_Tag extends Model
{
    use HasFactory;
    // Movie(1) 対 Movie_Tag(多)
    // public function movie()
    // {
    //     return $this->belongsTo('App\Models\Movie');
    // }
}
