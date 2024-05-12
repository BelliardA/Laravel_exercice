<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;
use App\Http\Requests\CinemaRequest;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cinemas.index', ['cinemas' => Cinema::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Cinema $cinema)
    {
        return view('cinemas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CinemaRequest $request)
    {
        Cinema::create($request->validated());

        return redirect()->route('cinema.index')->with('ok', __('Cinema has been saved'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cinema $cinema)
    {
        return view('cinemas.show', ['cinema' => $cinema]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cinema $cinema)
    {
        return view('cinemas.edit', ['cinema' => $cinema]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CinemaRequest $request, Cinema $cinema)
    {
        $cinema->update($request->validated());

        return redirect()->route('cinema.index')->with('ok', __('Cinema has been saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();

        return response()->json();
    }
}
