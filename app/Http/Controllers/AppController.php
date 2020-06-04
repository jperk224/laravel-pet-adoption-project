<?php

namespace App\Http\Controllers;
use App\Pet;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // landing page - return all pets in the DB
    public function renderIndex() {   
        return view('index', ['pets' => Pet::all()]);
    }

    // cats page - return only cats
    public function renderCats() {
        return view('cats', ['cats' => Pet::where('pet_type', 'cat')->get()]);
    }

    // dogs page - return only dogs
    public function renderDogs() {
        return view('dogs', ['dogs' => Pet::where('pet_type', 'dog')->get()]);
    }

}
