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
    // Movie(1) 対 Movie_Tag(多)？
    // public function tags()
    // {
    //    
    //     return $this->belongsToMany('App\Models\Tag', 'movie_tag', 'movie_id', 'tag_id');
    // }

    public function scopeSearch($query, $title, $release_year, $director_id, $country_id) //ローカルスコープ
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

        if($country_id != null) {
            $query->where('country_id', '=', $country_id);
        }

        if($director_id != null) {
            $query->where('director_id', '=', $director_id);
        }
        
        return $query;
    }
}