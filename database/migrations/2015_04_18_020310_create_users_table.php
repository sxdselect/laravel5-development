<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usr_users', function(Blueprint $table)
		{
			$table->increments('usr_id');
			$table->string('usr_email', 100)->unique();
			$table->string('usr_username', 100);
			$table->string('usr_password', 60);
			$table->integer('usr_last_login');
			$table->boolean('usr_status')->default(false);
			$table->rememberToken();
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
		Schema::drop('usr_users');
	}

}
