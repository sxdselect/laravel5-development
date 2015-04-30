<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
/**
 * 分类管理模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : auth
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Admin/CategoriesController.php
 +----------------------------------------------------------
 */
class CategoriesController extends AdminController 
{
	/**
	 * 分类列表
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = '';
	}


	/**
	 * 新建分类界面
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.categories.create');
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
