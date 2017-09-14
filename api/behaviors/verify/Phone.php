<?php
namespace api\behaviors\verify;

use yii;
use api\behaviors\verify\VerifyInterface;
use yii\web\Request;

class Phone implements VerifyInterface{
	
	public $arg;
	
	public function __construct($arg){
		$this->arg = $arg;
	}
	
	public function lunch(){
		$args = explode(',', $this->arg);
		foreach($args as $a){
			$request = Yii::$app->request;
			$value = $request->get($a);
			$result = preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $value);
			if(!$result){
				echo json_encode([
					'code'=>100,
					'msg'=>'请求参数错误',
				]);
				exit;
			}
		}
	}
}