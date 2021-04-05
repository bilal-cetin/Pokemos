<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Http\Requests\PokemonCreateRequest;
use Illuminate\Support\Str;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::paginate(5);
        return view('pokemon.list',compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PokemonCreateRequest $request)
    {
        if($request->hasFile('image')){
            $fileName = Str::slug($request->name).'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/'.$fileName;
            $request->image->move(public_path('uploads'),$fileName);
            $request->merge([
                'image'=>$fileNameWithUpload
            ]);
        }
        Pokemon::create($request->post());
        return redirect()->route('pokemons.index')->withSuccess('Pokemon Added');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
