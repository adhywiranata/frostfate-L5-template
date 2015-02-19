<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('second_user_id')->unsigned();
			$table->text('message');

			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('second_user_id')->references('id')->on('users');
		});

		$statement = "ALTER TABLE messages AUTO_INCREMENT = 6001";
        DB::unprepared($statement);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign('messages_user_id_foreign');
            $table->dropForeign('messages_second_user_id_foreign');
        });
		Schema::drop('messages');
	}

}
