<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importazione dei Models
use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {   
        //Select * from Movies
        $movies = Movie::all();

        return view ('home', [
            'movies' => $movies
        ]); //secondo argomento view key diveta variabile
    }

    public function singleMovie($id)
    {

        //SELECT * FROM movies WGERE id = $id
        $movie = Movie::findOrFail($id);

        // if (!$movie){
        //     abort(404);
        // }

        return view('singleMovie', [
            'movies' => $movie
        ]);
    }
}
