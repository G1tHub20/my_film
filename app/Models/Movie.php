<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Director(1) 対 Movie(多)
    public function director()
    {
       return $this->belongsTo('App\Models\Director');
    }
    public function country()
    {
       return $this->belongsTo('App\Models\Country');
    }
    public function distributor()
    {
       return $this->belongsTo('App\Models\Distributor');
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