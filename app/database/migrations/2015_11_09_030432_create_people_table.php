<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('slug');
            $table->string('alias');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('url_slug');
            $table->string('favorite_color');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->integer('year_begin')->unsigned();
            $table->integer('year_end')->unsigned();

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
		Schema::drop('people');
	}

}
