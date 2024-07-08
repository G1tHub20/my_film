<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\TMDbService;

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
        // $query = $this->argument('query');
        $with_genres = $this->argument('query');

        // GuzzleHTTPクライアントのインスタンスを作成
        $client = new Client();

        // APIリクエストを送信
        // $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie', [
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'headers' => [
                // 'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1ZThmODAzNmNlMzhhMmYxNTM5Yzg1NjdiMmM1OTU3MiIsInN1YiI6IjY2NzQzMzJiMWUxZmY1M2I5ZDFkYzZhNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4nPb4FfCtP3V6Q0rxfHUyFoatMzm_nB5U5O1da247ZA',
                'Accept' => 'application/json',
            ],
            'query' => [
                'api_key' => env('TMDB_API_KEY'),
                'with_genres' => $with_genres,
                'language' => 'ja-JA'
        ],
    ]);
        
        $body = $response->getBody();
        $data = json_decode($body, true)['results']; // JSONデータを配列に変換
        $movies = [];
        foreach($data as $movie) {
            $details = $this->tmdbService->getMovieDetails($movie['id']);

            $genres = null;
            foreach($details['genres'] as $i => $g) {
                if($i === array_key_last($details['genres'])) {
                    $genres .= strval($g['id']);
                } else {
                    $genres .= strval($g['id']) . ', ';
                }
            };

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


            $movies[] = [
                // 'id' => $details['id'],
                'title' => $details['title'],
                'original_title' => $details['original_title'],
                'overview' => $details['overview'],
                'release_year' => intval(substr($details['release_date'], 0, 4)),
                'director_id' => 6,
                'country_id' => $country,
                // 'director' => $details['credits']['cast'][0]['name'],
                'image1' => $details['backdrop_path'],
                'image2' => '',
                // 'genres' => $genres,
            ];

            // $movie->save(); //movieだけまず保存
            // dd($movie->id) //movie_idを元にジャンルを保存

            // dd($id,$title,$original_title,$overview,$genres,$release_year,$country,$director,$images);
        }
        
        foreach($movies as $movie){
            dd($movie);
         }

        // dd($movies);
        // データを表示（必要に応じて処理）
        // $this->info(print_r($movie, true));
    }
}