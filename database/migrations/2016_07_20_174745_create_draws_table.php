<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('draws', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('g_code',10);
			$table->foreign('g_code')
				->references('game_code')
				->on('games')
				->onDelete('restrict')
				->onUpdate('restrict');

			$table->enum('category', array('M', 'F','U'));
			$table->string('image_url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('draws');
	}

}
