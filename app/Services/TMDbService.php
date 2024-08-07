<?php

namespace App\Services;

use GuzzleHttp\Client;

class TMDbService
{
    protected $apiKey;
    protected $httpClient;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY'); //envファイルのapiキーを読み込む
        $this->httpClient = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
        ]);
    }
    
    public function getMovieDetails($movieId)
    {
        $response = $this->httpClient->request('GET', "movie/{$movieId}", [
            'query' => [
                'api_key' => $this->apiKey,
                'append_to_response' => 'credits',
                'language' => 'ja-JP', // 日本語のレスポンスを指定
                'page' => 1

            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        return $data;
    }

    public function getMovieBackdrop($movieId)
    {
        $response = $this->httpClient->request('GET', "movie/{$movieId}/images", [
            'query' => [
                'api_key' => $this->apiKey,
                // 'language' => 'ja-JP', // 日本語のレスポンスを指定
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        $images[0] = $data['backdrops'][0]['file_path'] ?? null;
        $images[1] = $data['backdrops'][3]['file_path'] ?? null;
        return $images;
    }
}
