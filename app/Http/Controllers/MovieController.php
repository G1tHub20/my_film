<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $values = Tag::all();
        return view('movies.index', compact('values'));
    }

    public function result(Request $request)
    {
        // 検索対応
        $title = $request->title; //タイトル
        $release_year = $request->release_year; //製作年

        $query = Movie::search($title, $release_year);
        // dd($query);
        // Directorをリレーションさせる
        // Eager Loading（遅延読み込み）
        // 関連するデータ（director）を事前に読み込む
        // withメソッドの引数にはモデルで定義したリレーションメソッド名を文字列で指定
        $movies = $query->with('director')->with('country')->with('distributor')->select('title','release_year','director_id','distributor_id','country_id')->get(); //getメソッド 結果をコレクションとして取得

        return view('movies.result', compact('movies'));
    }
}
