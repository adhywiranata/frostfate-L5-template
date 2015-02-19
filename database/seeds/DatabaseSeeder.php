<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		//the arrangement of this seeder is important
		$this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('MessagesTableSeeder');
		$this->call('NotificationsTableSeeder');
	}

}
