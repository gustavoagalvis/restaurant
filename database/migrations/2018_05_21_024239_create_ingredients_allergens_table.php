<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsAllergensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_allergens', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('ingredient_id')->unsigned();
            $table->integer('allergen_id')->unsigned();
            $table->foreign('allergen_id')->references('id')->on('allergens');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_allergens');
    }
}
