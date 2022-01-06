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
            $table->string('type');
            $table->string('brewery');
            $table->double('alc_percent');
            $table->integer('IBU')->unsigned()->nullable();
            $table->integer('size');
            $table->string('filename')->nullable();
            $table->boolean('beer_of_the_day')->default(0);

            $table->foreign('type')->references('type')->on('beer_types');
            $table->foreign('brewery')->references('name')->on('breweries');

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
