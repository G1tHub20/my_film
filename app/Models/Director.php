<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    // Director(1) 対 Movie(多)
    public function movie()
    {
    //    return $this->hasOne('App\Models\Movie');
       return $this->hasMany('App\Models\Movie');
    }
}
