<?php

namespace App\Services;

use GuzzleHttp\Client;

class TMDbService
{
    protected $apiKey;
    protected $httpClient;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
        $this->httpClient = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
        ]);
    }

    public function searchMovie($query)
    {
        $response = $this->httpClient->request('GET', 'search/movie', [ //movie/search?
            'query' => [
                'api_key' => $this->apiKey,
                'query' => $query
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['results'] ?? [];
    }
}
