<?php

use Illuminate\Database\Migrations\Migration;

class CreatePasteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paste', function($table) {
            $table->increments('id');

            $table->string('title', 100);
            $table->string('language', 20);
            $table->text('paste');
            $table->timestamp('last_viewed');

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
		Schema::drop('paste');
	}

}