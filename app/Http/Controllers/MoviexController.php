<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TMDbService;

class MoviexController extends Controller
{
    protected $tmdbService;

    public function __construct(TMDbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $movies = $this->tmdbService->searchMovie($query);

        return view('movies.test1', compact('movies'));
    }

    public function show($id)
    {
        $details = $this->tmdbService->getMovieDetails($id);

        // dd($details);
        return view('movies.test2', compact('details'));
    }
}
