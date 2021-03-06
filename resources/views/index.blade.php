<!-- Inherit the main template for the 'index' child page -->
@extends('layout');

@section('body')
<?php

use App\Http\Controllers\AppController;
use App\Support\HelperClass;


$pet_array = $pets->toArray(); // convert the ORM into an array for random pet feature

// Featured Pet
$featured_pet = $pet_array[array_rand($pet_array)];
echo '<div class="row mb-5">
    <div class="col-12">
        <div class="card bg-dark">
            <a href="/pet/' . $featured_pet["id"] .'"><img class="card-img-top" src="' 
            . $featured_pet["img_src_large"] . '" alt="Card image cap"></a>
            <div class="card-footer text-light text-center">
                <h2><a href="/pet/' . $featured_pet["id"] .'">Today\'s Featured Pet - ' . $featured_pet["pet_name"] . '</a></h2>
            </div>
        </div>
    </div>
</div>'; 

// All other pets in 'general' section

HelperClass::renderPetCards($pet_array, $featured_pet);

?>
@endsection
