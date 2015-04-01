<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episodes', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->string("title");
            $table->string("teaser");
            $table->text("description");
            $table->timestamp("airdate");
            $table->integer('serie_id')->unsigned();
            $table->timestamps();

            $table->foreign('serie_id')
                ->references('id')
                ->on('series')
                ->onDelete('cascade');
            //bij verwijderen van serie, moeten alle episodes gedelete worden
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('episodes');
        $table->dropForeign('episodes_serie_id_foreign');
	}

}
