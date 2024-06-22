<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Country;
use App\Models\Tag;
use App\Models\MovieTag; //アンダーバー使わない！
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

    public function create() // 登録
    {
        // 管理者ユーザかどうか判定
        $isAdmin = auth()->user()->isAdmin;
        if($isAdmin === 1) {
            return view('movies.create');
        } else {
            abort(404); // HTTP例外を出す
        }
    }

    public function result(Request $request) // 検索
    {
        $title = $request->title;               //タイトル
        $release_year = $request->release_year; //製作年
        $country_id = $request->country;        //製作国
        $director_id = $request->director;      //監督
        $tag_ids = $request->tag;                //タグ
        
        $query = Movie::search($title, $release_year, $director_id, $country_id);
        // Eager Loading（遅延読み込み）
        // 関連するデータ（director）を事前に読み込む
        // withメソッドの引数にはモデルで定義したリレーションメソッド名を文字列で指定
        $query
            ->with('director')
            ->with('country')
            ->with('distributor')
            // ->select('title','genre','release_year','director_id','distributor_id','country_id');
            ->select('id','title','release_year','director_id','distributor_id','country_id');

            //タグを持つ映画を絞り込み
            if(!empty($tag_ids) && !empty(count($tag_ids))) { //tag_idsがある、かつ、数が0じゃない
                $query = $query->whereHas('tags', function($q)use($tag_ids) { //whereHas リレーション先のテーブルの条件で検索
                    $q->whereIn('id', $tag_ids);                                  //useメソッドを使用するとクロージャの中で変数が使える
                });
            }

            // dd($query->toSql(), $query->getBindings());
            
        $movies = $query->get(); //getメソッド 結果をコレクションとして取得

        return view('movies.result', compact('movies'));
    }

    public function show($id) // 詳細情報
    {

        $query = Movie::search2($id);

        $query
            ->with('director')
            ->with('country')
            ->with('distributor')
            ->select('id','title','overview','release_year','director_id','distributor_id','country_id');
            
        $movie = $query->first();

        return view('movies.show',compact('movie'));
    //     $movie = Movie::find($id);

    //     // return view('contacts.show', compact('contact', 'gender', 'age'));
    //     return view('movies.show',compact('movie'));

    }
}