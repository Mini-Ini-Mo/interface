<?php
namespace api\behaviors\verify;
use yii;
use api\behaviors\verify\VerifyInterface;
use yii\web\Request;
use api\components\Hint;

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
					Hint::info(100);
				}
			}
		}
	}
}