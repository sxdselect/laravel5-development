<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
/**
 * 控制面板 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : auth
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Admin/DashboardController.php
 +----------------------------------------------------------
 */
class DashboardController extends AdminController
{
	/**
	 * 后台控制页面
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('admin.dashboard.index');
	}

	/**
	 * 添加视图
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * 处理添加事务
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * 显示视图
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * 编辑视图
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * 处理编辑事务
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * 处理删除事务
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
