<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    function fetch(){
        return view('genres.list', ['collection' => Genre::all()->sortBy(['genre_id'])]);
    }

    function add(){
        return view('genres.add');
    }

    function insert(Request $request){
        // add custom request class later
        $input = $request->validate([
            'name' => ['required']
        ]);
        Genre::create([
            'genre_name' => $input['name']
        ]);
        return redirect()->intended('/genre/view');
    }

    function edit(int $id){
        return view('genres.update', ['genre' => Genre::findOrFail($id)->attributesToArray()]);
    }

    function update(int $id, Request $request){
        $input = $request->validate([
            'name' => ['required']
        ]);
        Genre::where('genre_id', $id)
            ->update(['genre_name' => $input['name']]);
        return redirect()->intended('/genre/view');
    }

    function delete(int $id){
        Genre::destroy($id);
        return redirect()->intended('/genre/view');
    }
}
