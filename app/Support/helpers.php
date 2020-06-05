<?php

echo "INCLUDED!";

// Application helper funcitons, autoloaded in composer.json

// render pet cards in the 'general' section for each page
function renderPetCards($pet_array, $featured_pet = null) {
    echo '<div class="row mb-4">';
    
    // card columns are in the bootstrap class .col-md-4 that makes 3 cols in a desktop view
    // So, every three entries need a new row div

    $card_counter = 0;  // for every three cards start a new row

    foreach ($pet_array as $pet) {
        // don't render the featured pet in the 'general' section
        if (isset($featured_pet) && $pet["id"] == $featured_pet["id"]) {  
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
            if ($card_counter % 3 == 0) {
                echo '</div>';   // close the preceeding row div
                echo '<div class="row mb-4">';  // open a new row div
            }
        }
    }
}