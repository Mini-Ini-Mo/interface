<?php
namespace api\behaviors\verify;
use yii;
use api\behaviors\verify\VerifyInterface;
use yii\web\Request;

class Required implements VerifyInterface{
	
	public $arg;
	
	public function __construct($arg){
		$this->arg = $arg;
	}
	
	public function lunch(){
		if(empty($this->arg)){
			return false;
		}else{
			$args = explode(',', $this->arg);
			$request = Yii::$app->request;
	
			foreach($args as $a){
				if(!$request->get($a)){
					echo json_encode([
						'code'=>100,
						'msg'=>'请求参数错误',
					]);
					exit;
				}
			}
		}
	}
}