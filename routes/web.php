<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\logged;
use App\Http\Middleware\verifyAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//User
Route::middleware(Logged::class)->group(function (){
    Route::get('/catalogue/{page}', [CatalogController::class, 'collection'])->name('books');
    Route::get('/book/{id}', [CatalogController::class, 'fetch'])->name('book');
    Route::get('/rent', [BookController::class, 'rent'])->name('rent');
    Route::get('/rented', [BookController::class, 'rented']);

    // Admin
    Route::middleware(verifyAdmin::class)->group(function (){
        Route::get('/dashboard', function () {return view('dashboard');});
        Route::get('/books/view', [BookController::class, 'fetch'])->name('books.list');
        Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.update');
        Route::get('/books/add', [BookController::class, 'add'])->name('books.add');
        Route::get('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');
        Route::get('/genre/view', [GenreController::class, 'fetch'])->name('genres.list');
        Route::get('/genre/edit/{id}', [GenreController::class, 'edit'])->name('genres.update');
        Route::get('/genre/add', [GenreController::class, 'add'])->name('genres.add');
        Route::get('/genre/delete/{id}', [GenreController::class, 'delete'])->name('genres.delete');

        //Actions
        Route::post('/books/update/{id}', [BookController::class, 'update']);
        Route::post('/books/insert', [BookController::class, 'insert'])->name('books.insert');
        Route::post('/genre/update/{id}', [GenreController::class, 'update']);
        Route::post('/genre/insert', [GenreController::class, 'insert'])->name('genres.insert');
    });
});

// This here login
Route::get('/login', [LoginController::class, 'page']);
Route::post('/login/verify', [LoginController::class, 'authenticate']);
Route::get('/logout', function(){
    Auth::logout();
    return view('/login');
});

Route::get('/registration', [RegistrationController::class, 'page']);
Route::post('/register', [RegistrationController::class, 'register']);
