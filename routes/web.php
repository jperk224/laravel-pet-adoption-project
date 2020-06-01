<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index/landing Page
Route::get('/', function () {
    return view('welcome');
});

// Cats Page
Route::get('/cats', function () {
    echo "Cats page";
});

// Dogs Page
Route::get('/dogs', function () {
    echo "Dogs Page";
});
