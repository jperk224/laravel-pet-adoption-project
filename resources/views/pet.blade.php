<!-- Inherit the main template for the 'pet' child page -->
@extends('layout');

@section('body')
<?php

use App\Support\HelperClass;

$pet = $pet->toArray()[0]; // convert the ORM into an array for ease of use

HelperClass::renderPet($pet);

?>
@endsection
