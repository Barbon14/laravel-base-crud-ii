<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $movies = Comic::all();

        return view('pages.home', compact('movies'));
    }

    public function show($id)
    {

        $movie = Comic::findOrFail($id);

        return view('pages.show', compact('movie'));
    } 
}
