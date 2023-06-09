<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
        */
        public function index()
        {
            $genres = Genre::all();

    return view('genres.index', compact('genres'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = genre::all();
        return view('genres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request -> validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Genre::create($validatedata);
        return redirect('/genres')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genres)
    {
        $genres -> delete();
        return redirect('/genres')->with('success', 'Data berhasil di hapus');
    }
}
