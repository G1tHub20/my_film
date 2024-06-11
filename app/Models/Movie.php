<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director()
    {
    //    return $this->hasOne('App\Models\Director');
       return $this->belongsTo('App\Models\Director');
    }

    public function scopeSearch($query, $search) //ローカルスコープ
    {
        if($search != null) {
            $search_split = mb_convert_kana($search, 's'); //全角スペースを半角に変換
            $search_split2 = preg_split('/[\s]+/', $search_split); //空白で区切る
            foreach($search_split2 as $value) {
                $query->where('title', 'like', '%' . $value . '%');
        }
            return $query;
        }
    }
}