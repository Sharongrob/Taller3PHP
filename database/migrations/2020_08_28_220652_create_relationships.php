<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Relaciones entre la entidad statuses y users de (1 a n)
        Schema::table('users', function ($table)
        {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        //Relaciones entre la entidad users y movies de (1 a n) y statuses y movies (1 a n)
        Schema::table('movies', function ($table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        //Relaciones entre la entidad statuses y categories (1 a n)
        Schema::table('categories', function ($table)
        {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        //Relaciones entre las entidades movies y categories (m a n) y statuses y category_movie (1 a n)
        Schema::table('category_movie', function ($table)
        {
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('relationships');
    }
}
