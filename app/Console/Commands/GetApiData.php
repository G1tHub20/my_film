<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\TMDbService;
use App\Models\Movie;
use App\Models\GenreMovie;

class GetApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:tmdbapi';
    protected $signature = 'command:tmdbapi {query}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TMDB APIで映画データを取得するコマンド';

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
        $with_genres = $this->argument('query');

        // GuzzleHTTPクライアントのインスタンスを作成
        $client = new Client();

        // APIリクエストを送信
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => [
                'api_key' => env('TMDB_API_KEY'),
                'with_genres' => $with_genres,
                'language' => 'ja-JA',
                'limit' => 1,
        ],
    ]);
        
        $body = $response->getBody();
        $data = json_decode($body, true)['results']; // JSONデータを配列に変換
        foreach($data as $movie) {
            $details = $this->tmdbService->getMovieDetails($movie['id']);
            // dd($details);
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
                case 'UK':
                    $country = 3;
                    break;
                case 'France':
                    $country = 4;
                    break;
                case 'Germany':
                    $country = 5;
                    break;
                case 'South Korea':
                    $country = 6;
                    break;
                case 'China':
                    $country = 7;
                    break;
                case 'Canada':
                    $country = 8;
                    break;
                case 'Hong Kong':
                    $country = 9;
                    break;
                case 'India':
                    $country = 10;
                    break;
                default:
                    $country = 11;
                    break;
            }


            // Movie
            $movie = new Movie;
            $movie->title = $details['title'];
            $movie->original_title = $details['title'];
            $movie->overview = $details['overview'];
            $movie->release_year = intval(substr($details['release_date'], 0, 4));
            $movie->country_id = $country;
            $movie->image1 = $details['backdrop_path'];
            $movie->image2 = '';
            $movie->save(); //movieだけまず保存

            // GenreMovie
            $insertedId = $movie->id;
            foreach(explode(",", $genres) as $genre_id) {
                $genreMovie = new GenreMovie;
                $genreMovie->movie_id = $insertedId;
                $genreMovie->genre_id = $genre_id;
                // var_dump($genreMovie->getAttributes());
                $genreMovie->save();
            }

            // dd($id,$title,$original_title,$overview,$genres,$release_year,$country,$director,$images);
        }
    }
}