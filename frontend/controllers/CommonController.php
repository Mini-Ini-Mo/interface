<?php
namespace frontend\controllers;

use yii\web\Controller;

class CommonController extends Controller
{
	public $enableCsrfValidation=false;
	
	public function returnJson($code,$msg=false,$data=null)
	{
		//$msg = $msg?$msg:\Yii::$app->params[$code];
		echo json_encode([
				'code'=>$code,
				'msg'=>$msg,
				'data'=>$data,
		]);
	}
}