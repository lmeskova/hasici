<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInjuriesTable extends Migration {

	public function up()
	{
		Schema::create('injuries', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('injury_circumstances')->unsigned()->index();
			$table->integer('injury_causes')->unsigned()->index();
			$table->integer('injury_types')->unsigned()->index();
			$table->integer('injury_categories')->unsigned()->index();
			$table->integer('incident_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('injuries');
	}
}