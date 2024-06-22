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

    public function searchMovie($query) //パラメータ：検索したい映画の名前を含む文字列
    {
        $response = $this->httpClient->request('GET', 'search/movie', [
            'query' => [
                'api_key' => $this->apiKey,
                'query' => $query
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true); //JSON形式からPHPの連想配列にデコード

        return $data['results'] ?? []; //nullなら空の配列を渡す
    }

    public function getMovieDetails($movieId)
    {
        $response = $this->httpClient->request('GET', "movie/{$movieId}", [
            'query' => [
                'api_key' => $this->apiKey,
                'append_to_response' => 'credits'
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        return $data;
    }

    private function getDirector($crew)
    {
        foreach ($crew as $member) {
            if ($member['job'] == 'Director') {
                return $member['name'];
            }
        }
        return 'Director not found';
    }

    private function getProductionCountries($countries)
    {
        $countryNames = array_map(function($country) {
            return $country['name'];
        }, $countries);

        return implode(', ', $countryNames);
    }
}
