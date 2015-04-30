<?php
namespace App\Http\Controllers\Helper;

/**
 * Execl操作模块
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : controllers/Helper/ExeclController.php
 +----------------------------------------------------------
 */
class ExeclController extends Controller 
{
	/**
	 * 设置内存大小以及运行时间
	 *
	 * @return Response
	 */
	public function __construct() 
	{
		set_time_limit(0);
		ini_set('memory_limit', '512M');
	}

	/**
	 * 读取Execl数据
	 *
	 * @param string $filename 文件名称
	 * @param int $start 起始行数
	 * @return Response
	 */
	public function reader($filename, $start = 2)
	{
		$filename = 'test.xlsx';
		$filename = sprintf('datas/%s', $filename);
		$filename = public_path($filename);
		
		if ( !is_file($filename) ) {
			return false;
		}

		$PHPReader = new \PHPExcel_Reader_Excel2007();
		if ( !$PHPReader->canRead($filename) ) {
			$PHPReader = new \PHPExcel_Reader_Excel5();
			if ( !$PHPReader->canRead($filename) ) {
				exit('no Execl!');
			}
		}

		# 读取工作表
		$objPHPExecl = $PHPReader->load($filename);
		$objSheet = $objPHPExecl->getSheet(0);

		$allCol = $objSheet->getHighestColumn();
		$allRow = $objSheet->getHighestRow();

		$aValue = array();
		for ($row = $start; $row <= $allRow; $row++) 
		{ 
			for ($col = 'A'; $col < $allCol; $col++) 
			{ 
				$addr = $col . $row; 
				$sValue = $objSheet->getCell($addr)->getValue();

				if ( !empty($sValue) ) 
				{
					# 中文状态不能输出， 使用转码 iconv
					$sValue = iconv( 'utf-8', 'gb2312', $sValue);

					# 富文本转换字符串
					if ( $sValue instanceof \PHPExcel_RichText ) {
						$sValue = $sValue->__toString();
					}
				}
				$aValue[$row][$col] = $sValue;
			}
		}
		return $aValue;
	}

	/**
	 * 解决Execl整数化时间重新格式化
	 *
	 * @return string
	 */
	public function execlTime($intval)
	{
		$date = '';
		if (function_exists('GregorianToJD')) 
		{
			if (is_numeric($intval)) 
			{
				$start = GregorianToJD(1, 1, 1970);
				$jdtgg = JDToGregorian($start + intval($intval) - 25569);
				$intval = explode('/', $jdtgg);

				$year = str_pad($intval['2'], 4, '0', STR_PAD_LEFT);
				$moth = str_pad($intval['0'], 2, '0', STR_PAD_LEFT);
				$days = str_pad($intval['1'], 2, '0', STR_PAD_LEFT);

				$date = sprintf('%s-%s-%s', $year, $moth, $days);
			}
		} else
		{
			$intval = ($intval > 25568) ? ($intval + 1) : 25569;
			$offset = (70 * 365 + 17 + 2) * 86400;

			$date = date('Y-m-d', ($intval * 86400 - $offset));
		}
		return $date;
	}


	/**
	 * 写入Execl数据
	 *
	 * @param array $aValue 数据
	 * @example 
	 *         存在$aValue['fields']为有序输出, 输出$aValue['fields']键对值
	 *         不存在$aValue['fields']为无序输出, 直接输出$aValue
	 * @throws 开启debug模式会导致生成的Execl文件乱码
	 * @return Response
	 */
	public function writer($aValue)
	{
		$objPHPExecl = new \PHPExcel();
		$objPHPExecl->getProperties()->setTitle('export')->setDescription('none');
		$objPHPExecl->setActiveSheetIndex(0);

		$row = 1;
		if (isset($aValue['fields']) && !empty($aValue['fields'])) 
		{
			# 存在标题头, 输出标题头内容
			$aFields = $aValue['fields'];
			unset($aValue['fields']);

			$col = 0;
			foreach ($aFields as $key => $value) {
				$objPHPExecl->getActiveSheet()->setCellValueExplicitByColumnAndRow($col, $row, $value);
				$col = $col + 1;
			}
			
			$row = $row + 1;
			foreach ($aValue as $key => $value) 
			{
				$col = 0;
				foreach ($aFields as $keyFields => $valueFields) {
					$objPHPExecl->getActiveSheet()
						->setCellValueExplicitByColumnAndRow($col, $row, $value[$keyFields]);
					$col = $col + 1;
				}
				$row = $row + 1;
			}
		} else
		{
			# 不存在标题头, 直接输出所有内柔

			foreach ($aValue as $key => $value) 
			{
				$col = 0;
				foreach ($value as $kk => $vv) 
				{
					$objPHPExecl->getActiveSheet()->setCellValueExplicitByColumnAndRow($col, $row, $vv);
					$col = $col + 1;
				}
				$row = $row + 1;
			}
		}

		# 下载Execl文件
		$this->download($objPHPExecl, '', 'Excel5');
	}



	/**
	 * 下载生成的Execl数据
	 *
	 * @param object $object PHPExecl 对象
	 * @param string $filename 下载文件名称
	 * @param string $execl Execl版本
	 * @return Response
	 */
	public function download($object, $filename = '', $execl = 'Excel2007')
	{
		# 文件名称
		if (empty($filename)) {
			$filename = sprintf('document%d.xls', time());
		}

		$objWrite = \PHPExcel_IOFactory::createWriter($object, $execl);
		// Sending headers to force the user to download the file
		header('Content-Type: application/vnd.ms-execl');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWrite->save('php://output');
	}


}
