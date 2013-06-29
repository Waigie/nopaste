<?php

use Illuminate\Database\Migrations\Migration;

class PastesAddHashColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('paste', function($table) {
            $table->string('hash', 15)->after('id');
            $table->unique('hash');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$Schema::table('paste', function($table) {
            $table->dropUnique('paste');
            $table->dropColumn('paste');
        });
	}

}