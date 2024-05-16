<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// This here login
Route::get('/login', function(){
    return view('login');
});
Route::post('/login/verify', [LoginController::class, 'login']);
Route::get('/registration', [RegistrationController::class, 'page']);
Route::post('/register', [RegistrationController::class, 'register']);


Route::get('/catalogue/{page}', [CatalogController::class, 'collection']);
Route::get('/book/{id}', [CatalogController::class, 'fetch']);
