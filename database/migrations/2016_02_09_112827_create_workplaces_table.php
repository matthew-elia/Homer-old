<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkplacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workplaces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('temp_user_id')->unsigned();
			$table->foreign('temp_user_id')->references('id')->on('temp_users');
			$table->string('title')->nullable();
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->decimal('lat', 10, 8);
			$table->decimal('lng', 11, 8);
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}