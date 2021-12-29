<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('filename')->nullable();
            $table->unsignedBigInteger('type');
            $table->unsignedBigInteger('brewery');
            $table->boolean('beer_of_the_day');

            $table->foreign('type')->references('id')->on('beer_types');
            $table->foreign('brewery')->references('id')->on('breweries');

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
        Schema::dropIfExists('beers');
    }
}
