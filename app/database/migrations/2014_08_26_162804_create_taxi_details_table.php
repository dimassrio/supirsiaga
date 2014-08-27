<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxiDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxi_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('taxi_id');
			$table->string('names');
			$table->text('description');
			$table->string('image');
			$table->integer('price');
			$table->integer('brand_id');
			$table->integer('capacity');
			$table->integer('speed');
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
		Schema::drop('taxi_details');
	}

}
