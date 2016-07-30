<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('summaries', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('t_a_code',10);
			$table->foreign('t_a_code')
				->references('uni_code')
				->on('universities')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('t_b_code',10);
			$table->foreign('t_b_code')
				->references('uni_code')
				->on('universities')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('t_won',10);
			$table->foreign('t_won')
				->references('uni_code')
				->on('universities')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('g_code',10);
			$table->foreign('g_code')
				->references('game_code')
				->on('games')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->string('t_a_score',8);
			$table->string('t_b_score',8);
			$table->string('heading');
			$table->string('summery');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('summaries');
	}

}
