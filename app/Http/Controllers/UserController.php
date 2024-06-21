<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
  // public function index()
  // {
  //   return Http::get("https://reqres.in/api/users?page=2");
  // }

  // function post()
  // {
  //     $response = Http::withHeaders([
  //         'Content-Type' => 'application/json',
  //     ])->post('https://reqres.in/api/users', [
  //         'name' => 'morpheus',
  //         'job' => 'leader',
  //     ]);
  //     return $response;
  // }

  function post()
  {
    // $response = Http::get('http://example.com');
    // $data = $response->body();
    // dd($data);
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api.themoviedb.org', [
      'headers' => [
        'Authorization' => '5e8f8036ce38a2f1539c8567b2c59572',
        'accept' => 'application/json',
      ],
    ]);

    dd($response);
    return Http::get('http://example.com/users/1')['name'];
  }
}

?>