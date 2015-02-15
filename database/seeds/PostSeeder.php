<?php
use Illuminate\Database\Seeder;
//use DB;
//use L5template\Models\Post;

class PostsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

		/****************************************
        	Parents
         */
		Post::create(array(
			// 'id'			=> 100001,
			'user_id'		=> 1,
			'title'			=> 'How to kick a bucket',
			'content'		=> 'This post is clearly irrelevant, but might be nice to read LOL',
			'slug'			=> 'how-to-kick-a-bucket'
		));
	}
}