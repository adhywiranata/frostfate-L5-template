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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->string('name',50);
			$table->string('email');
			$table->string('password', 60);
			$table->string('first_name',50);
			$table->string('last_name',50);
			$table->string('title',50);
			$table->string('photo',255);
			$table->text('description');
			$table->date('dob');

			$table->rememberToken();
			$table->timestamps();
			
			$table->foreign('role_id')->references('id')->on('roles');
		});

		$statement = "ALTER TABLE users AUTO_INCREMENT = 101";
        DB::unprepared($statement);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
        });
		Schema::drop('users');
	}

}
