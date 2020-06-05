<!-- Inherit the main template for the 'dogs' child page -->
@extends('layout');

@section('body')
<?php

use App\Http\Controllers\AppController;
use App\Support\HelperClass;


$pet_array = $dogs->toArray(); // convert the ORM into an array for pet rendering

// All dogs in 'general' section

HelperClass::renderPetCards($pet_array);

?>
@endsection

