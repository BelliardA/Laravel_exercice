<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SalleRequest;
use App\Models\Salle;
use App\Models\Cinema;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('salles.index', ['salles' => Salle::paginate(2), 'cinemas' => Cinema::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salles.create', ['salle' => new Salle(), 'cinemas' => Cinema::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalleRequest $request)
    {
        Salle::create($request->validated());
        return redirect()->route('salle.index')->with('ok', __('Artist has been saved'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        return view('salles.show', ['salle' => $salle, 'cinemas' => Cinema::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salle $salle)
    {
        return view('salles.edit', ['salle' => $salle, 'cinemas' => Cinema::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SalleRequest $request,Salle $salle)
    {
        $salle->update($request->validated());

        return redirect()->route('salle.index')->with('ok', __('Artist has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        $salle -> delete();

        return response()->json();
    }
}
