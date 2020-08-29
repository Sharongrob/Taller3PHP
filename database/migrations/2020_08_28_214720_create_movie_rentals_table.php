<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_rentals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('movie_id')->unsigned();
            $table->bigInteger('rentals_id')->unsigned();
            $table->float('price');
            $table->string('description');
            // $table->timestamps();
        });
    }//te puedo pedir unfa vor?:((sii)) me dices como hacer para que el anterior proyecto qude igual para notarlo en el cuaderno|   git reset

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_rentals');
    }
}
