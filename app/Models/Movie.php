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

    public function scopeSearch($query, $title, $release_year) //ローカルスコープ
    {
        if($title != null) {
            $title_split = mb_convert_kana($title, 's'); //全角スペースを半角に変換
            $title_split2 = preg_split('/[\s]+/', $title_split); //空白で区切る
            foreach($title_split2 as $value) {
                $query->where('title', 'like', '%' . $value . '%');
            }
        }
            
        if($release_year != null) {
            $query->where('release_year', '=', $release_year);
        }
        
        return $query;
    }
}