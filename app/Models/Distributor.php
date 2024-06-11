<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    
    // Country(1) 対 Movie(多)
    public function movie()
    {
        return $this->hasMany('App\Models\Movie');
    }
}
