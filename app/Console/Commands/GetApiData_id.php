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
    protected $signature = 'command:tmdbapi_id {query}';

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
                // 'query' => 10749,
                'language' => 'ja-JA',
                'api_key' => env('TMDB_API_KEY'),
                'limit' => 1,
        ],
    ]);

        $body = $response->getBody();
        dd($body);

        $movie = json_decode($body, true); // JSONデータを配列に変換

        // dd($movie);
            $movie['id'] = 10749;

            $details = $this->tmdbService->getMovieDetails($movie['id']);

            $images = $this->tmdbService->getMovieBackdrop($movie['id']);

            $genres = implode(',', array_column($details['genres'], 'id'));

            //国名→国IDに置き換え
            $countryName = isset($details['production_countries'][0]['name']) ? $details['production_countries'][0]['name'] : 'N/A';
            $country = null;
            switch ($countryName) {
                case 'Japan':
                    $country = 1;
                    break;
                case 'United States of America':
                    $country = 2;
                    break;
                case 'United Kingdom':
                    $country = 3;
                    break;
                case 'Italy':
                    $country = 4;
                    break;
                case 'Spain':
                    $country = 5;
                    break;
                case 'France':
                    $country = 6;
                    break;
                case 'Germany':
                    $country = 7;
                    break;
                case 'Canada':
                    $country = 8;
                    break;
                case 'India':
                    $country = 9;
                    break;
                case 'Australia':
                    $country = 10;
                    break;
                case 'South Korea':
                    $country = 11;
                    break;
                case 'China':
                    $country = 12;
                    break;
                case 'Hong Kong':
                    $country = 13;
                    break;
                default:
                    $country = 15;
                    break;

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
                $movie->director = $details['credits']['cast'][0]['name'];
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
            }
        }
    }
}