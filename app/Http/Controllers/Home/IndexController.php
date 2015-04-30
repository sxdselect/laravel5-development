<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\HomeController;
/**
 * 前台产品模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Home/IndexController.php
 +----------------------------------------------------------
 */
class IndexController extends HomeController 
{
    /**
     * 前台首页
     *
     * @return Response
     */
    public function index()
    {
        return view('home.index.index');
    }


}
