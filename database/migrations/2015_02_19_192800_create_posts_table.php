<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->text('content')->nullable();
			$table->string('slug')->unique();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
		});

		$statement = "ALTER TABLE posts AUTO_INCREMENT = 1001";
        DB::unprepared($statement);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::table('posts', function (Blueprint $table) {
          //  $table->dropForeign('posts_user_id_foreign');
        //});
		Schema::drop('posts');
	}

}
