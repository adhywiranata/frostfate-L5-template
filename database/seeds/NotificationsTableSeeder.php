<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Notification;

class NotificationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('notifications')->delete();

		Notification::create(array(
			'user_id'		=> 102,
			'second_user_id'=> 101,
			'post_id'		=> 1002,
			'info'			=> 'liked your article : ',
			'is_read'		=> 0
		));

		Notification::create(array(
			'user_id'		=> 102,
			'second_user_id'=> 104,
			'post_id'		=> 1002,
			'info'			=> 'liked your article : ',
			'is_read'		=> 0
		));

		Notification::create(array(
			'user_id'		=> 101,
			'second_user_id'=> 102,
			'post_id'		=> 1003,
			'info'			=> 'liked your article : ',
			'is_read'		=> 0
		));

		Notification::create(array(
			'user_id'		=> 104,
			'second_user_id'=> 101,
			'post_id'		=> 1004,
			'info'			=> 'liked your article : ',
			'is_read'		=> 0
		));

	}
}