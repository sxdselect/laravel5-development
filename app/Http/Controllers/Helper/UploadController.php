<?php
namespace App\Http\Controllers\Helper;

/**
 * 上传操作模块
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Helper/UploadController.php
 +----------------------------------------------------------
 */
class UploadController extends Controller 
{
	/**
	 * 初始化上传数据
	 *
	 * @return Response
	 */
	public function __construct()
	{
		set_time_limit(300);
	}


	/**
	 * 处理上传文件
	 *
	 * @return Response
	 */
	public function uploader()
	{
		$aReturn = array(
			'jsonrpc' => '2.0',
			'result' => null,
			'id' => 'id'
		);
		echo json_encode($aReturn);
	}


	/**
	 * 处理图片预览
	 *
	 * @return Response
	 */
	public function preview()
	{
		$aReturn = array(
			'jsonrpc' => '2.0',
			'result' => null,
			'id' => 'id'
		);
		echo json_encode($aReturn);
	}


	/**
	 * web uploader上传组件
	 *
	 * @return Response
	 */
	public function webUploader()
	{
		return \View::make('admin.upload.webuploader');
	}
	

}
