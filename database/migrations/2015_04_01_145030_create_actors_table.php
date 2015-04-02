<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actors', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('biography');
            $table->timestamp('birthday');
            $table->string('birthname')->nullable();
            $table->integer('serie_id')->unsigned();
            $table->string('slug')->unique();
			$table->timestamps();

            $table->foreign('serie_id')
                ->references('id')
                ->on('series')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actors');
	}

}
