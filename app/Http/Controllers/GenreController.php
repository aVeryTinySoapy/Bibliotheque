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
        return response()->json(['action' => 'success']);
    }

    function edit(Request $request){
        $name = Genre::find($request['name'])->attributesToArray()['genre_name'];
        return response()->json(['name' => $name]);
    }

    function update(Request $request){
        Genre::where('genre_id', $request['id'])
            ->update(['genre_name' => $request['name']]);
        return response()->json(['action' => 'success']);
    }

    function delete(int $id){
        Genre::destroy($id);
        return redirect()->intended('/genre/view');
    }
}
