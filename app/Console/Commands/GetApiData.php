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
        $query = $this->argument('query');

        // GuzzleHTTPクライアントのインスタンスを作成
        $client = new Client();

        // APIリクエストを送信
        $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1ZThmODAzNmNlMzhhMmYxNTM5Yzg1NjdiMmM1OTU3MiIsInN1YiI6IjY2NzQzMzJiMWUxZmY1M2I5ZDFkYzZhNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4nPb4FfCtP3V6Q0rxfHUyFoatMzm_nB5U5O1da247ZA',
                'Accept' => 'application/json',
            ],
            'query' => [
                'query' => $query,
                'page' => 1,
                'language' => 'ja-JA'
        ],

    ]);
        
        $body = $response->getBody();
        $data = json_decode($body, true); // JSONデータを配列に変換

        // データを表示（必要に応じて処理）
        $this->info(print_r($data, true));
    }
}
