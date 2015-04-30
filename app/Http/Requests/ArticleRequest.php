<?php namespace App\Http\Requests;

use App\Models\Articles;

class ArticleRequest extends Request 
{
	/**
	 * 授权表单请求
	 *
	 * @return bool
	 */
	public function authorize()
	{
		
	}

	/**
	 * 表单请求验证
	 *
	 * @return array
	 */
	public function rules()
	{
		$id = $this->blog ? ',' . $this->blog : '';
		return [
			'title' => 'required|max:255',
			'summary' => 'required|max:65000',
			'content' => 'required|max:65000',
			'slug' => 'required|unique:posts,slug' . $id,
			'tags' => 'tags'
		];
	}

}