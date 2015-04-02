<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genres', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('genre');
			$table->timestamps();
		});

        //pivot table
        Schema::create('genre_serie', function(Blueprint $table) {
            $table->integer('genre_id')->unsigned()->index();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');

            $table->integer('serie_id')->unsigned()->index();
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('genre_serie');
        Schema::drop('genres');
	}

}
