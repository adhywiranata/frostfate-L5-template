<?php namespace L5template\Http\Controllers;

use Illuminate\Routing\Controller;

use L5template\Models\Post;
use L5template\Http\Requests;
use L5template\Http\Requests\CreatePostRequest;
use DB;
use Request;


class PostController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth', ['only' => 'create']);
		$this->middleware('auth', ['except' => 'index']);
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = DB::table('posts as a')
			->join('users as b','b.id','=','a.user_id')
			->select('a.title','content','name','slug','a.created_at')
			->get();

		return view('posts.post_index')
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
		$input['user_id'] = \Auth::user()->id;

		Post::create($input);
		//$post->user_id 	= Auth::user()->user_id;
		return redirect('user');
	}

	public function edit($slug){
		$post = Post::where('slug',$slug)
			->first();
		
		return view('posts.post_edit')
			->withPost($post);
	}

	public function update(CreatePostRequest $request, $slug){
		
		$input = $request->all();

		$post = Post::where('slug',$slug)
			->first();

		//Post::update($input);

		$post->title 	= $input['title'];
		$post->content 	= $input['content'];
		$post->update();

		return redirect('post');
	}

	public function destroy($slug)
	{
		$post = Post::where('slug',$slug)
			->first();

		$post->delete();

		return redirect('post');
	}



}
