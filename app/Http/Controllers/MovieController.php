<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Country;
use App\Models\Tag;
use App\Models\MovieTag; //アンダーバー使わない！
use App\Models\Genre;
use App\Models\Review;
use App\Http\Requests\StoreMovieForm; //フォームリクエスト
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        // $directors = Director::all();
        // 全ての監督（ユニーク）
        // $directors = Movie::distinct()->pluck('director');
        $directors = Movie::distinct()->orderBy('director')->pluck('director'); //directorが配列で出てくる
        $countries = Country::orderBy('id', 'asc')->get();
        // $genres = Genre::all()->orderBy('id', 'asc');
        $genres = Genre::orderBy('id', 'asc')->get();


        return view('movies.index', compact('tags','directors','countries','genres'));
    }


    public function result(Request $request) // 検索
    {
        $title = $request->title;               //タイトル
        $release_year = $request->release_year; //製作年
        $country_id = $request->country;        //製作国
        $director = $request->director;         //監督
        $tag_ids = $request->tag;               //タグ
        $genre_ids = $request->genre;           //ジャンル

        $query = Movie::search($title, $release_year, $director, $country_id, $genre_ids);
        // Eager Loading（遅延読み込み）で関連するデータを事前に読み込む
        // withメソッドの引数にはリレーションメソッド名を指定
        $query
            ->with('country') //Movieのcountryメソッドを呼び出す
            ->with('genres')
            ->select('id','title','release_year','director','country_id')

            ->sortable() //これを挟むだけ
            // ->orderBy('title', 'asc')
            ;

            //タグを持つ映画を絞り込み
            if(!empty($tag_ids) && count($tag_ids) > 0) { //tag_idsを持つ、かつ0個以上
                foreach ($tag_ids as $tag_id) {
                    $query = $query->whereHas('tags', function($q)use($tag_id) { //whereHas リレーション先のテーブルの条件で検索
                        $q->where('tag_id', $tag_id);                                //useメソッドを使用するとクロージャの中で変数が使える
                    });
                }
            }

            $movies = $query->get(); //getメソッド 結果をコレクションとして取得

            // 各映画に対してその映画のジャンルIDを取得する
            $movies->load('genres');
            $genres = [];
            foreach ($movies as $movie) {
                foreach ($movie->genres as $genre) {
                    $genres[$movie->id][$genre->id] = $genre->genre;
                }
            }

        return view('movies.result', compact('movies', 'genres'));
    }


    public function show($id) // 詳細情報
    {
        $movie_id = $id;
        $movie = Movie::find($id);
        $image_path = 'https://image.tmdb.org/t/p/w500';
        $image1 = $image_path . $movie->image1;
        $image2 = null;

        $user_id = auth()->user()->id;
        // 投稿済みのユーザーか
        $posted_user = 0;
        $count = Review::where('movie_id', '=', $movie_id)->where('user_id', '=', $user_id)->count();
        if($count > 0) {
            $posted_user = 1;
        }

        if(!empty($movie->image2)) {
            $image2 = $image_path . $movie->image2;
        }
        // tag_idのカウント数の降順
        $tags = $movie->tags()
        ->select('tags.id','tags.tag',\DB::raw('COUNT(movie_tag.tag_id) as tag_count'))
        ->groupBy('tags.id','tags.tag','movie_tag.movie_id','movie_tag.tag_id')
        ->orderBy('tag_count', 'desc')
        ->get();

        $genres = $movie->genres;
        $reviews = $movie->reviews->sortByDesc('id'); //ここでユーザ名も取得したい

        $rating = floor(Review::where('movie_id',$id)->avg('rating') *100) /100; //平均スコア
        return view('movies.show',compact('movie_id','movie','rating','image1','image2','tags','genres','reviews','posted_user'));
    }


    public function post($id) // レビュー作成
    {
        $user_id = auth()->user()->id;
        $tags = Tag::all();
        $movie = Movie::find($id);
        $movie_id = $movie->id;
        $title = $movie->title;

        return view('movies.post', compact('movie_id','user_id','title','tags'));
    }


    public function edit($id) // レビュー更新
    {
        $user_id = auth()->user()->id;
        $tags = Tag::all();
        $movie = Movie::find($id);

        // movieTagからtag_idと一緒にtagも取得したい
        // $movieTags = MovieTag::where('movie_id', '=', $movie_id)->where('user_id', '=', $user_id)->with('tag')->get();
        $movieTags = MovieTag::where('movie_id', '=', $movie->id)->where('user_id', '=', $user_id)->get();
        // dd($movieTags);
        $tag_ids = [];
        foreach($movieTags as $mTag) {                  //★pluckで書き換えできる
            array_push($tag_ids, $mTag->tag_id);
        }

        $review = Review::where('movie_id', '=', $movie->id)->where('user_id', '=', $user_id)->first();
        // dd($review);
        $comment = $review->comment;         //★$reviewでビューに渡す
        $rating = $review->rating;
        //★reviewが無い（NULL）とき

        // whereHas('tags', function($q)use($tag_id))


        return view('movies.edit', compact('movie','user_id','tags','review','tag_ids'));
    }


    public function store(StoreMovieForm $request) // DBに登録 //バリデーション
    {
        $review = new Review;

        $review->user_id = $request->input('user_id');
        $review->movie_id = $request->input('movie_id');
        $review->rating = $request->input('rating');
        $review->comment = $request->input('comment');

        // dd($review->rating);
        $review->save();

        $insertedId = [];
        foreach($request->input('newTag') as $newTag) {
            if(!empty($newTag)) {
                $tag = new Tag;
                $tag->tag = $newTag;
                $tag->save();
                array_push($insertedId, $tag->id); //登録したタグのidを次処理で使うため配列に格納
            }
        }

        if(!empty($request->input('tag')) || !empty($insertedId)) {
            $tags = [];
            // リストから選択
            if(!empty($request->input('tag'))) {
                $tags = $request->input('tag');
            }
            
            // 新規タグ
            if(!empty($insertedId)) {
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


    public function update(StoreMovieForm $request) // DBに登録 //バリデーション
    {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');
        $review = Review::where('movie_id', '=', $movie_id)->where('user_id', '=', $user_id)->first();


        // フォームの値で上書き
        $review->user_id = $user_id;
        $review->movie_id = $movie_id;
        $review->rating = $request->input('rating');
        $review->comment = $request->input('comment');

        $review->save();

        $insertedId = [];
        foreach($request->input('newTag') as $newTag) {
            if(!empty($newTag)) {
                $tag = new Tag;
                $tag->tag = $newTag;
                $tag->save();
                array_push($insertedId, $tag->id); //登録したタグのidを次処理で使うため配列に格納
            }
        }

        //既存タグのチェックが外されたら削除したい
        if(!empty($request->input('tag')) || !empty($insertedId)) {
            $tags = [];
            // リストから選択
            if(!empty($request->input('tag'))) {
                $tags = $request->input('tag');
            }
            
            // 新規タグ
            if(!empty($insertedId)) {
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

    // public function create() // 登録
    // {
    //     // 管理者ユーザかどうか判定
    //     $isAdmin = auth()->user()->isAdmin;
    //     if($isAdmin === 1) {
    //         return view('movies.create');
    //     } else {
    //         abort(404); // HTTP例外を出す
    //     }
    // }
}