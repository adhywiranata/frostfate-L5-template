<?php namespace L5template\Http\Middleware;

use Closure;

class redirectIfNotAnAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if( ! $request->user()->isAnAdmin()){
			return redirect('post');
		}
		
		return $next($request);
	}

}
