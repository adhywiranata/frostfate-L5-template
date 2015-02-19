<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Message;

class MessagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('messages')->delete();

		Message::create(array(
			'user_id'			=> 102,
			'second_user_id'	=> 101,
			'message'			=> 'sup bro'
		));

		Message::create(array(
			'user_id'			=> 101,
			'second_user_id'	=> 102,
			'message'			=> 'yo'
		));

		Message::create(array(
			'user_id'			=> 102,
			'second_user_id'	=> 101,
			'message'			=> 'how are things?'
		));

		Message::create(array(
			'user_id'			=> 101,
			'second_user_id'	=> 102,
			'message'			=> 'COOL'
		));

	}
}