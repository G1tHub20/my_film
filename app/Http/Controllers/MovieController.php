<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Country;
use App\Models\Tag;
use App\Models\Movie_Tag;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $directors = Director::all();
        $countries = Country::all();
        // dd($countries);
        return view('movies.index', compact('tags','directors','countries'));
    }

    public function result(Request $request)
    {
        // dd($request);
        // 検索対応
        $title = $request->title; //タイトル
        $release_year = $request->release_year; //製作年
        $country_id = $request->country; //製作国
        $director_id = $request->director; //監督

        if(!empty($request->tag)) {
            foreach ($request->tag as $tag_id) { //タグ（配列で取得）
                $movie_ids = Tag::find($tag_id)->movies()->pluck('id'); //pluckメソッド 指定したキーの全コレクション値を取得
            }
        }
        
        $query = Movie::search($title, $release_year, $director_id, $country_id);
        // Eager Loading（遅延読み込み）
        // 関連するデータ（director）を事前に読み込む
        // withメソッドの引数にはモデルで定義したリレーションメソッド名を文字列で指定
        $query->with('director')->with('country')->with('distributor')
            ->select('title','release_year','director_id','distributor_id','country_id');
        if(!empty($movie_ids)){
            $movies = $query->whereIn('id', $movie_ids); //検索条件に追加
        }
        $movies = $query->get(); //getメソッド 結果をコレクションとして取得

        return view('movies.result', compact('movies'));
    }
}
