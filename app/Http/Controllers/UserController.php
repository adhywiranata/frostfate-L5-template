<?php namespace L5template\Http\Controllers;

use Illuminate\Routing\Controller;

use L5template\Models\User;
use L5template\Models\Message;
use DB;
use L5template\Http\Requests;
//use L5template\Http\Requests\CreateUserRequest;

use Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{

		
		$user = User::where('id',\Auth::user()->id)
			->first();

		$messages = DB::table('messages as a')
			->join('users as b','b.id','=','a.second_user_id')
			->get();

		return view('users.user_dashboard')
			->withUser($user)
			->withMessages($messages);
	}

	public function user_detail($user_id)
	{
		$user = User::where('user_id',$user_id)
			->first();

		return view('users.user_details')
			->withUser($user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
