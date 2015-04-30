<?php 
namespace App\Repositories;

/**
 * 行为抽象基类模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Repositories/ArticleRepository.php
 +----------------------------------------------------------
 */
abstract class BaseRepository 
{

	/**
	 * The Model instance.
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * 获取查询条数
	 *
	 * @return array
	 */
	public function getNumber()
	{
		$total = $this->model->count();

		$new = $this->model->whereSeen(0)->count();

		return compact('total', 'new');
	}

	/**
	 * Destroy a model.
	 *
	 * @param  int $id
	 * @return void
	 */
	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

	/**
	 * 根据ID获取一条数据.
	 *
	 * @param  int  $id
	 * @return App\Models\Model
	 */
	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	/**
	 * 必传数据.
	 *
	 * @param  array  $required
	 * @param  array  $data
	 * @return void
	 */
	protected function _required($required, $data)
	{
		foreach ($required as $field) {
			if (!isset($data[$field])) {
				return false;
			}
		}
    	return true;
	}

	/**
	 * 默认值.
	 *
	 * @param  array  $defaults
	 * @param  array  $options
	 * @return void
	 */
	protected function _default($defaults, $options)
	{
		return array_merge($defaults, $options);
	}
}
