<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use App\Models\Artist;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Country;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', ['movies' => Movie::paginate(2), 'artists' => Artist::all(), 'countries' => Country::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Movie $movie)
    {
        
        return view('movies.create', ['movie' => $movie, 'artists' => Artist::all(),  'countries' => Country::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        $movie = Movie::create($request->validated());

        $poster = $request->file( 'poster' );
        $filename = 'poster_' . $movie->id . '.' . $poster->guessClientExtension();
        Image::read( $poster )->cover( 180, 240 )->save( storage_path( 'app/public/uploads/posters/' . $filename ) );
        return redirect()->route('movie.index')->with('ok', __('Movie has been saved'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        
        return view('movies.show', ['movie' => $movie, 'artists' => Artist::all(),  'countries' => Country::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie, 'artists' => Artist::all(),  'countries' => Country::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $poster = $request->file( 'poster' );
        $filename = 'poster_' . $movie->id . '.' . $poster->guessClientExtension();
        Image::read( $poster )->cover( 180, 240 )->save( storage_path( 'app/public/uploads/posters/' . $filename ) );

        $movie->update($request->validated());
        return redirect()->route('movie.index')->with('ok', __('Movie has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json();
    }
}
