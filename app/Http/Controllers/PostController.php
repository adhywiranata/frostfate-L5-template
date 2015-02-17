<?php namespace L5template\Http\Controllers;

use Illuminate\Routing\Controller;

use L5template\Models\Post;
use L5template\Http\Requests;
use L5template\Http\Requests\CreatePostRequest;

use Request;


class PostController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

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
		$posts = Post::all();
		return view('posts.post_index')
			->withPosts($posts);
	}
	public function post_details($slug)
	{
		$posts = Post::where('slug',$slug)->get();
		
		// throws 404 error page if no posts with current slug
		if(sizeof($posts)==0) abort(404);

		return view('posts.post_details')
			->withPosts($posts);
	}
	public function create()
	{
		return view('posts.post_create');
	}

	public function store(CreatePostRequest $request){
		
		$input = $request->all();

		$slug = strtolower($input['title']);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $slug);
		$input['slug'] = $slug;
		$input['user_id'] = 1;

		Post::create($input);
		//$post->user_id 	= Auth::user()->user_id;
		

		return redirect('post');
	}


}
