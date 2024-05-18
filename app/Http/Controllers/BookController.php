<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Rented;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    function fetch(){
        return view('books.list', ['collection' => Book::all(), 'genres' => Genre::all()]);
    }

    function insert(Request $request){
        Book::create([
            'book_title' => $request['title'],
            'book_author' => $request['author'],
            'book_genre' => $request['genre'],
            'book_price' => 300,
            'book_cover_img' => $request['url'],
        ]);
        return response()->json(['action' => 'success']);
    }

    function edit(Request $request){
        $book = Book::find($request['id'])->attributesToArray();
        return response()->json([$book]);
    }

    function update(Request $request){
        Book::where('book_id', $request['id'])
            ->update([
                'book_title' => $request['title'],
                'book_author' => $request['author'],
                'book_genre' => $request['genre'],
                'book_price' => 300,
                'book_cover_img' => $request['url'],
        ]);
        return response()->json(['action' => 'success']);
    }

    function delete(int $id){
        Book::destroy($id);
        return redirect()->intended('/books/view');
    }

    function rent(Request $request){
        //Auth::user();
        $now = date_create('now', timezone_open('Asia/Manila'));
        $due = date_add(date_create('now', timezone_open('Asia/Manila')), new \DateInterval('P7D'));
        Rented::create([
            'book_id' => $request['id'],
            'user_id' => Auth::user()['user_id'],
            'rent_date' => $now,
            'rent_due' => $due
        ]);
        return redirect()->intended('/catalogue/1');
    }

    function rented(){
        return view('rented', ['collection' => Rented::where('user_id', Auth::user()['user_id'])->get()]);
    }
}
