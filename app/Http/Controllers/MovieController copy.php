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
            $countries = Tag::all();
            return view('movies.index', compact('values'));
        }

        public function result(Request $request)
        {
            // 検索対応
            $search = $request->title;
            $query = Movie::search($search);
            // $movies = $query->select('title','release_year','director_id','distributor_id','country_id')->get();
            // 指定のdirector_idと紐づくdirectorテーブルのdirector（監督名）を取得したい
            // $director = Director::with('movie')->find(2)->directors; //withを使った書き方
            // $director = Director::find(1)->director;
            
            // Directorをリレーションさせる
            $movies = $query->with('director')->select('title','release_year','director_id','director','distributor_id','country_id')->get();

            // $query->dd(); //SQLの確認
            // dd($values);

            return view('movies.result', compact('movies'));
        }
}
