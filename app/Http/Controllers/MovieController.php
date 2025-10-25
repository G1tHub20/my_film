<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Tag;
use App\Http\Requests\StoreMovieForm; //フォームリクエスト
use App\Services\RatingService;
use App\Services\SearchService;
use App\Services\ReviewService;

class MovieController extends Controller
{
    protected $ratingService;
    protected $searchService;
    protected $reviewService;

    public function __construct(RatingService $ratingService, SearchService $searchService, ReviewService $reviewService)
    {
        $this->ratingService = $ratingService;
        $this->searchService = $searchService;
        $this->reviewService = $reviewService;
    }

    /*-------------------------------------------
    TOPページ
    -------------------------------------------*/
    public function index()
    {
        // 管理者ユーザかどうか判定
        $isAdmin = auth()->user()->isAdmin;
        if ($isAdmin === 1) {
            return redirect('movie/admin');

        } else {
            $options = $this->searchService->getOptionsForSearch();
            $movieData = $this->searchService->getMoviesForIndex();
            
            return view('movie.index', array_merge($options, $movieData));
        }
    }

    /*-------------------------------------------
    検索
    -------------------------------------------*/
    public function result(Request $request)
    {
        $result = $this->searchService->searchMoviesWithDetails($request);
        
        return view('movie.result', [
            'movies' => $result['movies'],
            'genres' => $result['genres'],
            'search_param' => $result['search_param']
        ]);
    }

    /*-------------------------------------------
    詳細情報
    -------------------------------------------*/
    public function show($id)
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
        $posted_user = $this->reviewService->hasUserPostedReview($movie_id, $user_id) ? 1 : 0;

        if(!empty($movie->image2)) {
            $image2 = $image_path . $movie->image2;
        }
        // tag_idのカウント数の降順
        $tags = $this->reviewService->getMovieTagsWithCount($id);

        $genres = $movie->genres;
        // レビューをユーザー名付きで取得（N+1問題解消）
        $reviews = $this->reviewService->getMovieReviewsWithUserNames($id);

        $rating = $this->ratingService->calculateAverageRating($id);
        
        return view('movie.show',compact('movie','rating','image1','image2','tags','genres','reviews','posted_user'));
    }


    /*-------------------------------------------
    レビュー登録
    -------------------------------------------*/
    public function post($id)
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

    /*-------------------------------------------
    レビュー編集
    -------------------------------------------*/
    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $tags = Tag::all();
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return abort(404); //http例外を投げる
        }

        // レビューサービスを使用してデータを取得
        $tag_ids = $this->reviewService->getUserTagIds($movie->id, $user_id);
        $review = $this->reviewService->getUserReview($movie->id, $user_id);

        return view('movie.edit', compact('movie','user_id','tags','review','tag_ids'));
    }

    /*-------------------------------------------
    DBに登録
    -------------------------------------------*/
    public function store(StoreMovieForm $request) //バリデーションあり
    {
        $review = $this->reviewService->createReview($request);
        return redirect('movie/' . $review->movie_id);
    }

    /*-------------------------------------------
    DBを更新
    -------------------------------------------*/
    public function update(StoreMovieForm $request) //バリデーションあり
    {
        $user_id = $request->input('user_id');
        $movie_id = $request->input('movie_id');

        if ($request->has('update')) {
            $review = $this->reviewService->updateReview($request);
            return redirect('movie/' . $review->movie_id);
            
        } elseif ($request->has('delete')) {
            $this->reviewService->deleteReview($movie_id, $user_id);
            return redirect('movie/' . $movie_id);
        }
    }

    /*-------------------------------------------
    管理者画面
    -------------------------------------------*/
    public function admin()
    {
        // 管理者ユーザかどうか判定
        $isAdmin = auth()->user()->isAdmin;
        if($isAdmin === 1) {
            return view('movie.admin');
        } else {
            abort(404); // HTTP例外を出す
        }
    }
}