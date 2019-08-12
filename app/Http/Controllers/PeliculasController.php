<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pelicula;


class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::paginate(5);
        return view ('peliculas.index')
             ->with('peliculas', $peliculas);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peliculas = Pelicula::create($request->all());

        $request->validate([
            'pelicula'=>'required|max:50',
          ]);
    
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view ('peliculas.edit')
             ->with('pelicula', $pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);

        $request->validate([
            'pelicula'=>'required|max:20',
          ]);
          
        $pelicula->update($request->all());
        return redirect()->route('peliculas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}
