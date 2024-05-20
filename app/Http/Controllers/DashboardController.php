<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function fetch(){
        $count_books = Book::select('*')->count();
        $count_genres = Genre::select('*')->count();
        $count_users = User::select('*')->count();
        return view('dashboard', ['books' => $count_books, 'genres' => $count_genres, 'users' => $count_users]);
    }
}
