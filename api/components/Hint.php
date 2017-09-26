<?php
namespace api\components;

class Hint
{
	public static function info($code,$msg=null,$data=null)
	{
		$params = \Yii::$app->params;
		\Yii::$app->response->statusCode = $params['api_'.$code]['code'];
		if($msg){
			\Yii::$app->response->statusText = $msg;
		}else{
			\Yii::$app->response->statusText = $params['api_'.$code]['msg'];
		}
		if($data){
			\Yii::$app->response->data = $data;
		}
		
		return false;
	}
}