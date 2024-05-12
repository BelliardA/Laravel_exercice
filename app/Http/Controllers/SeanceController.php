<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Seance;
use App\Models\Movie;
use App\Http\Requests\SeanceRequest;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seances.index', ['seances' => Seance::paginate(2), 'movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seances.create', ['seance' => new Seance(), 'movies' => Movie::all(), 'salles' => Salle::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeanceRequest $request)
    {
        Seance::create($request->validated());
        return redirect()->route('seance.index')->with('ok', __('Artist has been saved')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seance $seance)
    {
        return view('seances.edit', ['seance' => $seance, 'movies' => Movie::all(), 'salles' => Salle::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SeanceRequest $request, Seance $seance)
    {
        $seance->update( $request->all() );

        return redirect()->route('senace.index')->with( 'ok', __('Artist has been updated') );
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seance $seance)
    {
        $seance->delete();
        return response()->json();

    }
}
