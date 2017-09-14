<?php
namespace api\behaviors\verify;

use yii;
use api\behaviors\verify\VerifyInterface;
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
					'code'=>100,
					'msg'=>'请求参数错误',
				]);
				exit;
			}
		}
	}
}