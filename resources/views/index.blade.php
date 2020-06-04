<!-- Inherit the main template for the 'index' child page -->
@extends('layout');

@section('body')
<?php
$pet_array = $pets->toArray(); // convert the ORM into an array for random pet feature

// Featured Pet
$featured_pet = $pet_array[array_rand($pet_array)];
var_dump($featured_pet);
echo '<div class="row mb-5">
    <div class="col-12">
        <div class="card bg-dark">
            <img class="card-img-top" src="' . $featured_pet["img_src_large"] . '" alt="Card image cap">
            <div class="card-footer text-light text-center">
                <h2>Today\'s Featured Pet - ' . $featured_pet["pet_name"] . '</h2>
            </div>
        </div>
    </div>
</div>';  // TODO: Add link to individual Page

// All other pets in 'general' section

echo '<div class="row mb-4">';

// card columns are in the bootstrap class .col-md-4 that makes 3 cols in a desktop view
// So, every three entries need a new row div

$card_counter = 0;  // for every three cards start a new row

foreach($pet_array as $pet) {
    if($pet["id"] == $featured_pet["id"]) {     // don't render the featured pet in the 'general' section
        continue;
    }
    else {
        echo '<div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="' . $pet["img_src_regular"] . '" alt="' . $pet["img_alt_text"] . '">
                    <div class="card-body">
                        <h5 class="card-title text-light">' . $pet["pet_name"] . '</h5>
                    </div>
                </div>
            </div>';
        $card_counter++; 
        if($card_counter % 3 == 0) {
            echo '</div>';   // close the preceeding row div
            echo '<div class="row mb-4">';  // open a new row div
        }
    }
}

?>

<!-- <div class="row mb-5">
    <div class="col-12">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/800x400/?dog,cat" alt="Card image cap">
            <div class="card-footer text-light text-center">
                <h2>Featured</h2>
            </div>
        </div>
    </div>
</div> -->

<!-- All other pets
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,1" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,2" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,3" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,4" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,5" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,6" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-light">Pet name</h5>
            </div>
        </div>
    </div>
</div> -->
@endsection
