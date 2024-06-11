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
            $search = $request->title;
            $query = Movie::search($search);
            // Directorをリレーションさせる
            // $movies = $query->with('director')->select('title','release_year','director_id','director','distributor_id','country_id')->get();
            $movies = $query->with('director')->select('title','release_year','director_id','distributor_id','country_id')->get();

            // $query->dd(); //SQLの確認

            return view('movies.result', compact('movies'));
        }
}
