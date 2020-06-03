<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();                               // primary key
            $table->enum('pet_type', ['cat', 'dog']);   // use of enum restricts pet_type to cat or dog
            $table->string('pet_name', 100);            // VARCHAR(100) pet_name field
            $table->date('rescue_date');
            $table->longText('pet_description');        // a description about the animal to render in the UI
            $table->tinyInteger('age');
            $table->string('img_src', 100);
            $table->string('img_alt_text', 100);
            $table->timestamps();                       // Adds nullable created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
