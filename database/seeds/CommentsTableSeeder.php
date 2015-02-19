<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Comment;

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

		Comment::create(array(
			'user_id'		=> 102,
			'post_id'		=> 1002,
			'comment'		=> 'this is a great article, nice'
		));

		Comment::create(array(
			'user_id'		=> 102,
			'post_id'		=> 1002,
			'comment'		=> 'WOOT! great'
		));

		Comment::create(array(
			'user_id'		=> 101,
			'post_id'		=> 1003,
			'comment'		=> 'this is a great article, nice'
		));

		Comment::create(array(
			'user_id'		=> 104,
			'post_id'		=> 1004,
			'comment'		=> 'this is a great article, nice'
		));

	}
}