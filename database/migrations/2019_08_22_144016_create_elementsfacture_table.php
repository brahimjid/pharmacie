<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateElementsfactureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elementsfacture', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('prix', 10, 0);
			$table->float('remise', 10, 0);
			$table->integer('idMedicament');
			$table->integer('idFactrue')->nullable();
			$table->integer('quantite');
			$table->float('prixtotal', 10, 0);
			$table->date('dateperemption')->nullable();
			$table->string('numlot', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('elementsfacture');
	}

}
