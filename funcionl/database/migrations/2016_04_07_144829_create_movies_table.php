<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{	// columnas de la tabla
			$table->increments('id');
			$table->string('name');
			$table->string('cast');
			$table->string('direction');
			$table->string('genre');
			$table->string('duration');
			$table->timestamps();
			// se agrega llaves foranea
			$table->integer('genre_id')->unsigned();
			$table->foreign('genre_id')->references('id')->on('genres');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');
	}

}
