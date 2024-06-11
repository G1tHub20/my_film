<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    // 1対1のリレーション
    public function movie()
    {
        return $this->hasOne(Movie::class);
    }
}
