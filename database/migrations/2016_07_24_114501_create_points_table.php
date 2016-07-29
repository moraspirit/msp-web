<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('points', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('g_code',10);
			$table->foreign('g_code')
				->references('game_code')
				->on('games')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('u_code',10);
			$table->foreign('u_code')
				->references('uni_code')
				->on('universities')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->float('points',8,1);
			$table->enum('category', array('M','F'));

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('points');
	}

}
