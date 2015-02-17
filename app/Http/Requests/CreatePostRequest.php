<?php namespace L5template\Http\Requests;

use L5template\Http\Requests\Request;

class CreatePostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
		//return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title'		=> 'required|min:3',
			'content'	=> 'required'
		];
	}

}
