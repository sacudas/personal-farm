<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->integer('age'); // how old is the tree
			$table->integer('bear_id'); // which bear climb this tree
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
		Schema::drop('trees');
	}

}
