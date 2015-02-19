<?php namespace L5template\Http\Controllers;

use Illuminate\Routing\Controller;

use L5template\Models\Post;

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
		$posts = Post::where('slug',$keyword)->get();
			
		// throws 404 error page if no posts with current slug
		if(sizeof($posts)==0) abort(404);

		return view('posts.post_details')
			->withPosts($posts);
	}
}

?>