<?php
namespace api\controllers;

use yii;
use yii\web\Request;
use yii\web\Controller;

class CommonController extends Controller
{
	public $enableCsrfValidation=false;
	
	public $params;
	
	/**
	* 输出json
	* @date: 2017年9月12日 下午3:43:26
	* @author: cuik
	*/
	public function outputJson($code,$msg=false,$data=null)
	{
		//$msg = $msg?$msg:\Yii::$app->params[$code];
		echo json_encode([
				'code'=>$code,
				'msg'=>$msg,
				'data'=>$data,
		]);
	}
}