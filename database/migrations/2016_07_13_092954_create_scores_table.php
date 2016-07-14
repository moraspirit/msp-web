<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('g_code',10);
			$table->foreign('g_code')
				->references('game_code')
				->on('games')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('u_code',5);
			$table->foreign('u_code')
				->references('uni_code')
				->on('universities')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->float('score');
			$table->enum('category', array('M', 'F','U'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scores');
	}

}
