<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use L5template\Models\Role;

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

		Role::create(array(
			'role'		=> 'Administrator'
		));

		Role::create(array(
			'role'		=> 'Senior Contributor'
		));

		Role::create(array(
			'role'		=> 'Contributor'
		));

		Role::create(array(
			'role'		=> 'Member'
		));
	}
}