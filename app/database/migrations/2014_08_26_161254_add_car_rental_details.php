<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCarRentalDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('car_rental_details', function(Blueprint $table)
		{
			$table->integer('capacity');
			$table->integer('speed');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('car_rental_details', function(Blueprint $table)
		{
			$table->dropColumn('capacity');
			$table->dropColumn('speed');
		});
	}

}
