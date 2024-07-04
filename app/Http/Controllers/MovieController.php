<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Country;
use App\Models\Tag;
use App\Models\MovieTag; //アンダーバー使わない！
use App\Models\Review;
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
            ->with('director') //Movieのdirectorメソッドを呼び出す
            ->with('country')
            ->select('id','title','release_year','director_id','country_id');

            //タグを持つ映画を絞り込み
            if(!empty($tag_ids) && !empty(count($tag_ids))) { //tag_idsがある、かつ、数が0じゃない
                $query = $query->whereHas('tags', function($q)use($tag_ids) { //whereHas リレーション先のテーブルの条件で検索
                    $q->whereIn('id', $tag_ids);                                  //useメソッドを使用するとクロージャの中で変数が使える
                });
            }

        $movies = $query->get(); //getメソッド 結果をコレクションとして取得

        return view('movies.result', compact('movies'));
    }

    public function show($id) // 詳細情報
    {
        $movie_id = $id;
        $movie = Movie::find($id);
        $title = $movie->title;
        $release_year = $movie->release_year;
        $country = $movie->country->country;
        $overview = $movie->overview;
        $director = $movie->director->director;
        $image_path = 'https://image.tmdb.org/t/p/w500';
        $image1 = $image_path . $movie->image1;
        $image2 = null;
        if(!empty($movie->image2)) {
            $image2 = $image_path . $movie->image2;
        }
        // $tags = $movie->tags;
        // tag_idのカウント数の降順
        $tags = $movie->tags()
        ->select('tags.tag',\DB::raw('COUNT(movie_tag.tag_id) as tag_count'))
        ->groupBy('tags.id','tags.tag','movie_tag.movie_id','movie_tag.tag_id')
        ->orderBy('tag_count', 'desc')
        ->get();

        $genres = $movie->genres;
        $reviews = $movie->reviews;

        $rating = floor(Review::where('movie_id',$id)->avg('rating') *100) /100;
        // dd($rating);

        return view('movies.show',compact('movie_id','title','rating','release_year','country','overview','director','image1','image2','tags','genres','reviews'));
    }

    public function post($id) // レビューを書く
    {
        $tags = Tag::all();
        $movie = Movie::find($id);
        $movie_id = $movie->id;
        $title = $movie->title;
        // dd($title);
        $user_id = auth()->user()->id;

        return view('movies.post', compact('movie_id','user_id','title','tags'));
    }

    public function store(Request $request) // DBに登録
    {
        $review = new Review;
        // $tag = new Tag;
        $review->user_id = $request->input('user_id');
        $review->movie_id = $request->input('movie_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->save();

        $insertedId = [];
        foreach($request->input('newTag') as $newTag) {
            if($newTag != null) {
                $tag = new Tag;
                $tag->tag = $newTag;
                $tag->save(); //★既存と重複する場合は例外処理したい
                array_push($insertedId, $tag->id);
            }
        }
        // $insertedId = $tag->id;             //登録したタグのidを取得

        if(!empty($request->input('tag'))) {
            $tags = $request->input('tag');
            if(!empty($insertedId)) { //タグの追加があれば
                foreach($insertedId as $i) {
                    array_push($tags, strval($i)); //取得したidを配列に追加
                }
            }

            foreach($tags as $tag) {
                $movieTag = new MovieTag;
                $movieTag->movie_id = $request->input('movie_id');
                $movieTag->tag_id = $tag;
                $movieTag->user_id = $request->input('user_id');
                $movieTag->save();
            }
        }
        // 詳細情報画面に遷移
        return redirect('movies/' . $review->movie_id);
        // return route('movies.show', ['id' => $review->movie_id]);
    }
}