<?php

namespace App\Support;

class HelperClass
{
    // Application helper functions

    /**
     * Render Pet Cards
     * Function used to output html to render the pet cards
     * in the general section that is not the featured pet.
     * 
     * @param $pet_array the array of pets to render in the UI
     * @param $featured_pet the featured pet in the jumbotron.  Pass
     * in so it's not duplicated on the page
     */

    public static function renderPetCards($pet_array, $featured_pet = null) {
        echo '<div class="row mb-4">';

        // card columns are in the bootstrap class .col-md-4 that makes 3 cols in a desktop view
        // So, every three entries need a new row div

        $card_counter = 0;  // for every three cards start a new row

        foreach ($pet_array as $pet) {
            // don't render the featured pet in the 'general' section
            if (isset($featured_pet) && $pet["id"] == $featured_pet["id"]) {
                continue;
            } else {
                echo '<div class="col-lg-4 mb-4">
            <div class="card bg-dark">
                <a href="/pet/' . $pet["id"] .'"><img class="card-img-top" src="' 
                . $pet["img_src_regular"] . '" alt="' . $pet["img_alt_text"] . '"></a>
                <div class="card-body">
                    <h5 class="card-title text-light"><a href="/pet/' . $pet["id"] .'">' . $pet["pet_name"] . '</a></h5>
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
        return;
    }

    public static function renderPet($pet) {
        echo '<div class="container">
                <div class="row pet-header">
                    <div class="col-sm-4 pet-info">
                        <h5>' . $pet["pet_name"] . '</h5>
                    </div>
                    <div class="col-sm-4 pet-info">
                    <h5>Rescued ' . date('M d Y', strtotime($pet["rescue_date"])) . '</h5>
                    </div>
                    <div class="col-sm-4 pet-info">';
                        if($pet["age_years"] > 0) {
                            echo '<h5>' . $pet["age_years"] . ' years old</h5>';
                        }
                        else {
                            echo '<h5>' . $pet["age_months"] . ' months old</h5>';
                        }
                    echo '</div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"> 
                        <div class="card bg-dark">
                            <img class="card-img-top pet-pic" src="' . $pet["img_src_regular"] . '" alt="' . $pet["img_alt_text"] 
                            . '">
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"> 
                        <h4>' . $pet["pet_description"] . '</h4>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>';
    }
}
