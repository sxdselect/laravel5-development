<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# 定义全局参数过滤
Route::pattern('id', '[0-9]+');

Route::get('/', 'Home\IndexController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



# 后台模块
Route::group(array('prefix' => 'administrator'), function()
{
	# 控制面板
	Route::get('dashboard', 
		array(
			'as' => 'dashboard', 
			'uses' => 'Admin\DashboardController@index'
		)
	);

	# 文章管理
	Route::resource('article', 'Admin\ArticleController');
	# 文章分类
	Route::resource('categories', 'Admin\CategoriesController');
});