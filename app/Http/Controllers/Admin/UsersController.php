<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
/**
 * 用户管理模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : auth
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Admin/UsersController.php
 +----------------------------------------------------------
 */
class UsersController extends AdminController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$aUsr = \User::all();
		return view('admin.users.index')->with('users', $aUsr);;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('admin.users.create');
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
