<?php namespace L5template\Http\Controllers;

use Illuminate\Routing\Controller;

use L5template\Models\Post;
use L5template\Models\User;

class GeneralController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$posts = Post::all();
		//return view('posts.post_index')
			//->withPosts($posts);
	}

	public function get_detail($keyword)
	{
		//first search through users (relatively less results)

		//if not found, search through posts 
		$post = Post::where('slug',$keyword)
			->first();
			
		// throws 404 error page if no posts with current slug
		if(sizeof($post)!=0) 
		{
		return view('posts.post_details')
			->withPost($post);
		}
		else{
			$user = User::where('name',$keyword)
				->first();
			if(sizeof($user)!=0)
			{
				return view('users.user_details')
					->withUser($user);
			}
			else
			{
				abort(404);
			}
				
		}
	}	
}

?>