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
    // protected $signature = 'command:tmdbapi {query}';
    protected $signature = 'command:tmdbapi {with_genres}';

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
        $with_genres = $this->argument('with_genres');

        // GuzzleHTTPクライアントのインスタンスを作成
        $client = new Client();

        // APIリクエストを送信
        // $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie', [
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1ZThmODAzNmNlMzhhMmYxNTM5Yzg1NjdiMmM1OTU3MiIsInN1YiI6IjY2NzQzMzJiMWUxZmY1M2I5ZDFkYzZhNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4nPb4FfCtP3V6Q0rxfHUyFoatMzm_nB5U5O1da247ZA',
                'Accept' => 'application/json',
            ],
            // 'query' => [
            'with_genres' => [
                // 'query' => $query,
                'with_genres' => $with_genres,
                'page' => 1,
                'language' => 'ja-JA'
        ],
    ]);
        
        $body = $response->getBody();
        $data = json_decode($body, true)['results']; // JSONデータを配列に変換
        $movies = [];
        foreach($data as $movie) {
            $details = $this->tmdbService->getMovieDetails($movie['id']);

            $genres = [];
            foreach($details['genres'] as $g) {
                $genres[] = [
                    $g['id']
                ];
            };
            $movieX[] = [
                'id' => $details['id'],
                'title' => $details['title'],
                'original_title' => $details['original_title'],
                'genres' => $genres,
                'overview' => $details['overview'],
                'release_year' => substr($details['release_date'], 0, 4),
                'country' => $details['production_countries'][0]['name'],
                'director' => $details['credits']['cast'][0]['name'],
                'images' => $details['backdrop_path'],
            ];

            // dd($id,$title,$original_title,$overview,$genres,$release_year,$country,$director,$images);
        }
        dd($movieX);
        // データを表示（必要に応じて処理）
        // $this->info(print_r($movie, true));
    }
}