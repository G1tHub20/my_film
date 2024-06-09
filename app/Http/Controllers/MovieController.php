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

        public function index(Request $request)
        {           
            // 検索対応
            $search = $request->search;
            $query = Movie::search($search);
            $values = $query->select('id','title','release_year');

            // dd($values);
            // $query->dd(); //SQLの確認

            return view('movies.index', compact('values'));
        }

        public function search()
        {
            $values = Tag::all();
            return view('movies.search', compact('values'));
        }
}
