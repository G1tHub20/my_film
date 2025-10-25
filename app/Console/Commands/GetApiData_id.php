<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\TMDbService;
use App\Models\Movie;
use App\Models\GenreMovie;

class GetApiData_id extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:tmdbapi_id {query}'; //artisanコマンドとして登録するときの識別子

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TMDB APIで公開年から映画データを取得するコマンド';

    /**
     * Execute the console command.
     *
     * @return int
     */
    protected $tmdbService;

    public function __construct(TMDbService $tmdbService)
    {
        // 親コンストラクタを呼び出す
        parent::__construct();
        $this->tmdbService = $tmdbService;
    }

    public function handle()
    {
        // コマンドライン引数から検索クエリを取得
        $id = $this->argument('query');

        // GuzzleHTTPクライアントのインスタンスを作成
        $client = new Client();

        // APIリクエストを送信
        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/10749', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => [
                // 'query' => $id,
                'language' => 'ja-JA',
                'api_key' => env('TMDB_API_KEY'),
                'limit' => 1,
        ],
    ]);

        $body = $response->getBody();

        $movie = json_decode($body, true); // JSONデータを配列に変換

        $details = $this->tmdbService->getMovieDetails($id);

        // dd($details);

        $images = $this->tmdbService->getMovieBackdrop($id);

        $genres = implode(',', array_column($details['genres'], 'id'));

        //国名→国IDに置き換え
        $countryCode = isset($details['production_countries'][0]['iso_3166_1']) ? $details['production_countries'][0]['iso_3166_1'] : 'N/A';
        $countryMap = [
            'JP' => 1,   // 日本
            'US' => 2,   // アメリカ
            'GB' => 3,   // イギリス
            'IT' => 4,   // イタリア
            'ES' => 5,   // スペイン
            'FR' => 6,   // フランス
            'DE' => 7,   // ドイツ
            'CA' => 8,   // カナダ
            'IN' => 9,   // インド
            'AU' => 10,  // オーストラリア
            'KR' => 11,  // 韓国
            'CN' => 12,  // 中国
            'HK' => 13,  // 香港
            'BR' => 14,  // ブラジル
            'MX' => 15,  // メキシコ
            'FI' => 16,  // フィンランド
            'BE' => 17,  // ベルギー
            'DK' => 18,  // デンマーク
        ];

        $country = $countryMap[$countryCode] ?? 99;

        // Movie
        // もし重複するtmdb_idがあればスキップする
        $count = Movie::where('tmdb_id', $details['id'])->count();
        if($count < 1) {
            $movie = new Movie;
            $movie->title = $details['title'];
            $movie->tmdb_id = $details['id'];
            $movie->original_title = $details['original_title'];
            $movie->overview = $details['overview'];
            $movie->release_year = intval(substr($details['release_date'], 0, 4));
            // 監督名
            foreach($details['credits']['crew'] as $crew) {
                if($crew['known_for_department'] === 'Directing') {
                    $movie->director = $crew['name'];
                    break;
                }
            }
            $movie->country_id = $country;
            $movie->image1 = $images[0];
            $movie->image2 = $images[1];
            var_dump($movie->getAttributes());
            $movie->save(); //movieだけまず保存

            // GenreMovie
            $insertedId = $movie->id;
            foreach(explode(",", $genres) as $genre_id) {
                $genreMovie = new GenreMovie;
                $genreMovie->movie_id = $insertedId;
                $genreMovie->genre_id = $genre_id;
                $genreMovie->save();
            }
        } else {
            print("既に登録されています" . "（" . $details['id']. "）");
        }
    }
}