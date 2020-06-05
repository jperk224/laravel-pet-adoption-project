<!-- Inherit the main template for the 'cats' child page -->
@extends('layout');

@section('body')
<?php

use App\Http\Controllers\AppController;
use App\Support\HelperClass;


$pet_array = $cats->toArray(); // convert the ORM into an array for pet rendering

// All cats in 'general' section

HelperClass::renderPetCards($pet_array);

?>
@endsection
