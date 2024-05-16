<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function collection(int $page): View{
        $collection =  Book::select('*')->limit(5)->offset(($page - 1) * 5)->get();
        return view('catalogue', ['collection' => $collection,
            'next' => (count($collection->toArray()) < 5) ? 1:$page+1,
            'prev' => ($page == 1) ? 0: $page-1]);
    }

    public function fetch(int $id): View{
        return view('book', ['book' => Book::find($id)->attributesToArray()]);
    }
}
