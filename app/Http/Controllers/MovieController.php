<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Country;
use App\Models\User;
use App\Models\Tag;
use App\Models\MovieTag; //モデル名にアンダーバー使わない！
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
        $genre_names = Genre::orderBy('id')->get();
        $release_year = Movie::distinct()->orderBy('release_year', 'desc')->pluck('release_year');
        $directors = Movie::distinct()->orderBy('director')->pluck('director');
        $countries = Country::orderBy('id')->get();

        $top_movies = Review::havingRaw('AVG(rating) >= 4.5')->groupBy('movie_id')->pluck('movie_id');

        $movies = Movie::with('country')->whereIn('id', $top_movies)->get();

        // 各映画に対してその映画のジャンルIDを取得する
        $movies->load('genres');
        $genres = [];
        foreach ($movies as $movie) {
            foreach ($movie->genres as $genre) {
                $genres[$movie->id][$genre->id] = $genre->genre;

                $rating = floor(Review::where('movie_id', $movie->id)->avg('rating') *100) /100; //平均スコア
                $movie->setAttribute('rating', $rating); //配列に属性を追加
            }
        }

        return view('movie.index', compact('tags','countries','genre_names','release_year','directors','movies','genres'));
    }


    public function result(Request $request) // 検索
    {
        $title = $request->title;               //タイトル
        $release_year = $request->release_year; //製作年
        $country_id = $request->country;        //製作国
        $director = $request->director;         //監督
        $tag_ids = $request->tag;               //タグ
        $genre_id = $request->genre;            //ジャンル

        $query = Movie::search($title, $release_year, $director, $country_id, $genre_id);
        // Eager Loading（遅延読み込み）で関連するデータを事前に読み込む
        // withメソッドの引数にはリレーションメソッド名を指定
        $query
            ->with('country') //Movieのcountryメソッドを呼び出す
            ->with('genres')
            ->select('id','title','release_year','director','country_id')

            ->sortable(); //これを挟むだけ

            // タグを持つ映画を絞り込み（AND条件）
            // if(!empty($tag_ids) && count($tag_ids) > 0) { //tag_idsを持つ、かつ0個以上
            //     foreach ($tag_ids as $tag_id) {
            //         $query = $query->whereHas('tags', function($q)use($tag_id) { //whereHas リレーション先のテーブルの条件で検索
            //             $q->where('tag_id', $tag_id);                                //useメソッドを使用するとクロージャの中で変数が使える
            //         });
            //     }
            // }
            // タグを持つ映画を絞り込み（OR条件）
            if (!empty($tag_ids) && count($tag_ids) > 0) { // tag_idsが存在し、かつ0個以上
                $query->whereHas('tags', function ($q) use ($tag_ids) {
                    $q->whereIn('tag_id', $tag_ids);
                });
            }

            
            $movies = $query->get(); //getメソッド 結果をコレクションとして取得
            foreach($movies as $movie) {
                $rating = floor(Review::where('movie_id', $movie->id)->avg('rating') *100) /100; //平均スコア
                $movie->setAttribute('rating', $rating); //配列に属性を追加
            }

            // カスタムソート: ratingでソート
            $sort = $request->input('sort', 'id');
            $direction = $request->input('direction', 'asc');
            if ($sort === 'rating') {
                $movies = $direction === 'desc' ? $movies->sortByDesc('rating') : $movies->sortBy('rating');
            } else {
                $movies = $direction === 'desc' ? $movies->sortByDesc($sort) : $movies->sortBy($sort);
            }

            // 各映画に対してその映画のジャンルIDを取得する
            $movies->load('genres');
            $genres = [];
            foreach ($movies as $movie) {
                foreach ($movie->genres as $genre) {
                    $genres[$movie->id][$genre->id] = $genre->genre;
                }
            }

            // 検索条件の表示
            $search_params = [];
            if(!is_null($title)) {
                array_push($search_params, "\"" . $title . "\"");
            }
            if(!is_null($release_year)) {
                array_push($search_params, $release_year . "年");
            }
            if(!is_null($genre_id)) {
                $genre = Genre::find($genre_id);
                array_push($search_params, $genre->genre);
            }
            if(!is_null($director)) {
                array_push($search_params, $director);
            }
            if(!is_null($country_id)) {
                $country = Country::find($country_id);
                array_push($search_params, $country->country);
            }
            if(!is_null($tag_ids)) {
                $tags = Tag::whereIn('id', $tag_ids)->pluck('tag')->toArray(); //コレクションを配列に変換
                $tag = "\"" . implode( "／", $tags) . "\"";
                array_push($search_params, $tag);
            }
            $search_param = implode( ",　", $search_params);

        return view('movie.result', compact('movies', 'genres', 'search_param'));
    }


    public function show($id) // 詳細情報
    {
        $movie_id = $id;
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return abort(404); //http例外を投げる
        }
        // dd($movie);
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
        // $reviews = $movie->reviews->sortByDesc('id'); //ここでユーザ名も取得したい
        $reviews = $movie->reviews->sortByDesc('id'); //ここでユーザ名も取得したい
        foreach($reviews as $review) {

            // $name = User::find($review->user_id)->pluck('name'); //pluck 配列を返す
            $name = User::where('id', '=', $review->user_id)->value('name'); //value 単一の値を返す
            $review->setAttribute('name', $name); //配列に属性を追加
        }

        $rating = floor(Review::where('movie_id',$id)->avg('rating') *100) /100; //平均スコア
        
        return view('movie.show',compact('movie','rating','image1','image2','tags','genres','reviews','posted_user'));
    }


    public function post($id) // レビュー作成
    {
        $user_id = auth()->user()->id;
        $tags = Tag::all();
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return abort(404); //http例外を投げる
        }
        $title = $movie->title;

        return view('movie.post', compact('movie','user_id','title','tags'));
    }


    public function edit($id) // レビュー更新
    {
        $user_id = auth()->user()->id;
        $tags = Tag::all();
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return abort(404); //http例外を投げる
        }

        // movieTagからtag_idと一緒にtagも取得したい //★pluckで書き換えできる
        $tag_ids = MovieTag::where('movie_id', '=', $movie->id)->where('user_id', '=', $user_id)->pluck('tag_id')->all();
        $review = Review::where('movie_id', '=', $movie->id)->where('user_id', '=', $user_id)->first();

        return view('movie.edit', compact('movie','user_id','tags','review','tag_ids'));
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
        return redirect('movie/' . $review->movie_id);
    }


    public function update(StoreMovieForm $request) // DBに登録 //バリデーション
    {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');

        if ($request->has('update')) { //リクエストに値が存在するか判定
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

            //事前に既存タグを全て削除
            $tag_ids = MovieTag::where('movie_id', '=', $movie_id)->where('user_id', '=', $user_id)->delete();

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
            return redirect('movie/' . $movie_id);

        } elseif ($request->has('delete')) {
            
            //タグ（MovieTag）を削除
            MovieTag::where('movie_id', $movie_id)->where('user_id', $user_id)->delete();
            //レビューを削除
            Review::where('movie_id', $movie_id)->where('user_id', $user_id)->delete();
            
            // 詳細情報画面に遷移
            return redirect('movie/' . $movie_id);
        }

    }

    // public function create() // 登録
    // {
    //     // 管理者ユーザかどうか判定
    //     $isAdmin = auth()->user()->isAdmin;
    //     if($isAdmin === 1) {
    //         return view('movie.create');
    //     } else {
    //         abort(404); // HTTP例外を出す
    //     }
    // }
}