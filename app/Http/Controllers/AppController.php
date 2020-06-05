<?php

namespace App\Http\Controllers;
use App\Pet;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Landing Page
     * 
     * @return Index Page - all pets in the DB
     */
    public function renderIndex() {   
        return view('index', ['pets' => Pet::all()]);
    }

    /**
     * Cats Page
     * 
     * @return Cats Page - all cats in the DB
     */
    public function renderCats() {
        return view('cats', ['cats' => Pet::where('pet_type', 'cat')->get()]);
    }

    /**
     * Dogs Page
     * 
     * @return - all dogs in the DB
     */
    public function renderDogs() {
        return view('dogs', ['dogs' => Pet::where('pet_type', 'dog')->get()]);
    }

    /**
     * Pet Page
     * 
     * @return - individual pet details page
     */
    public function renderPet($pet_id) {
        // TODO: Add redirect if id exceeds DB table range
        return view('pet', ['pet' => Pet::where('id', $pet_id)->get()]);
    }
}
