<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Comment;

class LikesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('likes')->delete();

		Comment::create(array(
			'user_id'		=> 102,
			'post_id'		=> 1002
		));
		
		Comment::create(array(
			'user_id'		=> 103,
			'post_id'		=> 1002
		));
		
		Comment::create(array(
			'user_id'		=> 104,
			'post_id'		=> 1002
		));

		Comment::create(array(
			'user_id'		=> 104,
			'post_id'		=> 1001
		));

	}
}