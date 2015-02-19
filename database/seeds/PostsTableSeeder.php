<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Post;

class PostsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

		Post::create(array(
			'user_id'		=> 102,
			'title'			=> 'How to kick a bucket',
			'content'		=> 'This post is clearly irrelevant, but might be nice to read.',
			'slug'			=> 'how-to-kick-a-bucket'
		));

		Post::create(array(
			'user_id'		=> 101,
			'title'			=> 'Bacon is tasty',
			'content'		=> 'This post is clearly irrelevant, but might be nice to read.',
			'slug'			=> 'bacon-is-tasty'
		));

		Post::create(array(
			'user_id'		=> 103,
			'title'			=> 'Roses are Red Violets are Blue',
			'content'		=> 'This post is clearly irrelevant, but might be nice to read.',
			'slug'			=> 'roses-are-red-violets-are-blue'
		));

		Post::create(array(
			'user_id'		=> 104,
			'title'			=> 'The Big Brown Fox is too Lazy to Jump',
			'content'		=> 'This post is clearly irrelevant, but might be nice to read.',
			'slug'			=> 'the-big-brown-fox-is-too-lazy-to-jump'
		));
	}
}