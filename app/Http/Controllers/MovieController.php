<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// モデルを読み込む
use App\Models\Movie;
use App\Models\Tag;
// DBファサードを読み込む
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
        // public function index()
        // {
        //     // DBテーブルから全件取得（エロクアント）
        //     $values = Movie::all();
        //     // dd($values);
        //     return view('movies.index', compact('values')); //compact関数でViewに変数を渡す
        // }

        public function index()
        {
            $values = Tag::all();
            return view('movies.index', compact('values'));
        }

        public function result(Request $request)
        {
            // 検索対応
            $search = $request->title;
            $query = Movie::search($search);
            // $values = $query->select('id','title','release_year');
            $values = $query->select('title','release_year','director_id','distributor_id','country_id')->get();

            // $query->dd(); //SQLの確認
            // dd($values);

            return view('movies.result', compact('values'));
        }
}
