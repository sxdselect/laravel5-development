<?php
namespace App\Http\Controllers;

/**
 * 后台模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/AdminController.php
 +----------------------------------------------------------
 */
class AdminController extends Controller 
{
	/**
	 * 布局
	 *
	 * @return void
	 */
	protected $layout = 'layouts.default';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

}
