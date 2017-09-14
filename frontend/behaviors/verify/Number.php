<?php
namespace frontend\behaviors\verify;

use yii;
use frontend\behaviors\verify\VerifyInterface;
use yii\web\Request;

class Number implements VerifyInterface{
	
	public $arg;
	
	public function __construct($arg){
		$this->arg = $arg;
	}
	
	public function lunch(){
		$args = explode(',', $this->arg);
		foreach($args as $a){
			$request = Yii::$app->request;
			$value = $request->get($a);
			if(!preg_match("/^\d*$/",$value)){
				echo json_encode([
					'code'=>101,
					'msg'=>'请求参数错误',
				]);
				exit;
			}
		}
	}
}