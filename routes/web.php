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

// Landing Page
Route::get('/', function () {
    return view('index');
});

// Cats Page
Route::get('/cats', function () {
    return view('cats');
});

// Dogs Page
Route::get('/dogs', function () {
    return view('dogs');
});
