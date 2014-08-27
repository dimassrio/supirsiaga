<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarRentalDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_rental_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('car_rental_id');
			$table->string('names');
			$table->text('description');
			$table->string('image');
			$table->integer('price');
			$table->integer('brand_id');
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
		Schema::drop('car_rental_details');
	}

}
