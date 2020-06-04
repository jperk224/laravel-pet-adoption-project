<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Add 100 random pet record to pets table
     *
     * @return void
     */
    public function run()
    {
        // random array data to pull from
        $pet_types = ['dog', 'cat'];
        $names = ['tiger', 'anna', 'belle', 'molly', 'johnson', 'billy', 
                    'hank', 'wilson', 'poppy', 'darlene', 'cindy', 'wendy', 
                    'mitch', 'jones', 'tops', 'captain', 'summer', 'porter', 'mary', 'bessy'];
        $current_date = new DateTime();
        $url_counter = 0;   // this will increment with each loop iteration to add a new number to the 
                            // unsplash api url to pull a different photo for each pet record

        for ($i = 0; $i < 100; $i++) {
            $url_counter++;
            $pet_type = ucwords($pet_types[array_rand($pet_types)]);
            $pet_name = ucwords($names[array_rand($names)]) . ' ' . ucwords($names[array_rand($names)]);
            // generate rescue date in ISO YYYY-MM-DD format
            do {
                $month = rand(1,12);
                $day = rand(1,28);      // we could logically use 29, 30, and 31 days here with some branching,  
                                        // but we're just seeding the DB with fake records here.
                $year = rand(2018, 2020);
                $rescue_date = new DateTime($month . '/' . $day . '/' . $year);
            } while ($rescue_date > $current_date);   // if rescue_date generated > current date try again 
            $rescue_date_string = $rescue_date->format('Y-m-d');
            $pet_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                                mollit anim id est laborum.';
            $age_months = rand(0,120);          
            $age_years = intval($age_months / 12);
            $img_src_large = 'https://source.unsplash.com/800x400/?';       // for the 'featured' jumbotron
            $img_src_regular = 'https://source.unsplash.com/350x350/?';

            // append cat or dog to unsplash api based on pet type
            // cat and dog are the only choices
            if(strtolower($pet_type) == 'cat') {
                $img_src_large .= 'cat';
                $img_src_regular .= 'cat';
            }
            else {
                $img_src_large .= 'dog';
                $img_src_regular .= 'dog';
            }

            $img_src_large = $img_src_large . $url_counter;
            $img_src_regular = $img_src_regular . $url_counter;

            $img_alt_text = 'A random ' . strtolower($pet_type) . ' photo';

            DB::table('pets')->insert([
                'pet_type' => $pet_type,
                'pet_name' => $pet_name,
                'rescue_date' => $rescue_date_string,
                'pet_description' => $pet_description,
                'age_months' => $age_months,
                'age_years' => $age_years,
                'img_src_large' => $img_src_large,
                'img_src_regular' => $img_src_regular,
                'img_alt_text' => $img_alt_text
            ]);
        }
    }
}
