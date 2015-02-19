<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('second_user_id')->unsigned();
			$table->integer('post_id')->unsigned();
			$table->string('info',255);
			$table->integer('is_read');

			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('second_user_id')->references('id')->on('users');
			$table->foreign('post_id')->references('id')->on('posts');
		});

		$statement = "ALTER TABLE notifications AUTO_INCREMENT = 8001";
        DB::unprepared($statement);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_user_id_foreign');
            $table->dropForeign('notifications_second_user_id_foreign');
            $table->dropForeign('notifications_post_id_foreign');
        });
		Schema::drop('notifications');
	}

}
