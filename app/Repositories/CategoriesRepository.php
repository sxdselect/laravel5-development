<?php namespace App\Repositories;

use App\Models\Categories;

/**
 * 文章分类行为模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Repositories/CategoriesRepository.php
 +----------------------------------------------------------
 */
class CategoriesRepository extends BaseRepository
{
	/**
	 * 初始化分类
	 *
	 * @param  App\Models\User $user
	 * @param  App\Models\Articles $article
	 * @param  App\Models\Categories $categories
	 * @return void
	 */
	public function __construct(Categories $categories)
	{
		$this->model = $categories;
	}


	/**
	 * 获取分类列表
	 *
	 * @return void
	 */
	public function getCategories()
	{
		
	}


	/**
	 * 获得某分类下的子分类
	 *
	 * @return void
	 */
	public function getChildCategories($lft, $rgt)
	{
		# 查询出大于父分类左值
		# 并且小于父分类右值的分类为该分类下的子分类

	}


	/**
	 * 添加分类
	 *
	 * @return void
	 */
	public function addCategory()
	{
		# 把大于父分类左值的分类的左右值+2,
		# 并且插入新分类的左右分别为父分类的左值+1和+2

		# $this->model->beginTransaction();
		# $this->model->rollback();
		# $this->model->commit();

		$this->model->transaction(function()
		{

		});
	}


	/**
	 * 删除分类
	 *
	 * @return void
	 */
	public function delCategory()
	{
		# 删除左右值在本分类之间的分类，
		# 并且修改大于本分类右值的所有节点他们的左右值都减去right-left + 1
	}


	/**
	 * 修改分类
	 *
	 * @return void
	 */
	public function setCategory()
	{

	}
	
}