<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

		User::create(array(
			'role_id'		=> '14',
			'name'			=> 'John Doe',
			'email'			=> 'johndoe@gmail.com',
			'password'		=>  md5('johndoe'),
			'first_name'	=> 'john',
			'last_name'		=> 'doe',
			'title'			=> 'the default guy',
			'photo'			=> 'john.jpg',
			'description'	=> 'the default guy who loves blogging ',
			'dob'			=> '1992-02-02'
		));

		User::create(array(
			'role_id'		=> '14',
			'name'			=> 'Mikeys',
			'email'			=> 'johndoes@gmail.com',
			'password'		=>  md5('johndoe'),
			'first_name'	=> 'mikey',
			'last_name'		=> 'blank',
			'title'			=> 'the second guy',
			'photo'			=> 'john.jpg',
			'description'	=> 'the default guy who loves blogging ',
			'dob'			=> '1992-02-02'
		));

		User::create(array(
			'role_id'		=> '14',
			'name'			=> 'mariell3',
			'email'			=> 'johndoel@gmail.com',
			'password'		=>  md5('johndoe'),
			'first_name'	=> 'Marielle',
			'last_name'		=> 'Christa',
			'title'			=> 'the default gal',
			'photo'			=> 'girl.jpg',
			'description'	=> 'the girl who loves blogging ',
			'dob'			=> '1992-02-02'
		));

		User::create(array(
			'role_id'		=> '14',
			'name'			=> 'Jake',
			'email'			=> 'jakel@gmail.com',
			'password'		=>  md5('johndoe'),
			'first_name'	=> 'jake',
			'last_name'		=> 'jakey',
			'title'			=> 'the default guy',
			'photo'			=> 'john.jpg',
			'description'	=> 'the default guy who loves blogging ',
			'dob'			=> '1992-02-02'
		));
	}
}