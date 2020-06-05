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
// Route::view('/', 'index');
Route::get('/', 'AppController@renderIndex');

// Cats Page
// Route::view('/cats', 'cats');
Route::get('/cats', 'AppController@renderCats');

// Dogs Page
// Route::view('/dogs', 'dogs');
Route::get('/dogs', 'AppController@renderDogs');

// Pet page
Route::get('/pet/{pet_id}', 'AppController@renderPet');     // Render the appropriate pet based on the id passed

// Redirect home if request to pet page has no id
Route::redirect('/pet', '/');
