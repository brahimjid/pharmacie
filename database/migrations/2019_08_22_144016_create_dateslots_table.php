<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDateslotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dateslots', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('dateperemption')->nullable();
			$table->string('numlot', 100)->nullable();
			$table->integer('quantite');
			$table->integer('idElements');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dateslots');
	}

}
