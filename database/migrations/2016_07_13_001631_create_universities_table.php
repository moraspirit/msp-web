<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('universities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uni_name',30)->unique();
			$table->string('uni_code',5)->unique();
			$table->string('logo',50)->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('universities');
	}

}
