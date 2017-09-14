<?php
namespace api\behaviors\verify;

use yii;
use yii\base\ActionFilter;
use api\behaviors\verify\Required;
use api\behaviors\verify\Number;
use api\behaviors\verify\Phone;

/**
* 文件用途描述
* ```php
* public function behaviors()
* {
*     return [
*         'access' => [
*             'class' => \yii\filters\VerifyControl::className(),
*             'only' => ['create', 'update'],
*             'rules' => [
*                 // deny all POST requests
*                 [
*                     ['name,pwd','required'],
					  ['pwd','number'],
					  ['name','phone'],
*                 ],
*                 // allow authenticated users
*                 [
*                     ['name,pwd','required'],
					  ['pwd','number'],
					  ['name','phone'],
*                 ],
*                 // everything else is denied
*             ],
*         ],
*     ];
* }
* ```
* @date: 2017年9月13日 上午11:12:25
* @author: cuik
*/
class VerifyControl extends ActionFilter{
	
	public $only = [];
	
	public $rules = [];
	
	public function beforeAction($action){
		$actionId = $this->getActionId($action);
		if(in_array($actionId, $this->only)){
			$index = array_search($actionId, $this->only);
			$rules = $this->rules[$index];	
			foreach($rules as $r){
				$className = ucfirst($r[1]);
				if($className == 'Required'){
					$obj = new Required($r[0]);
					$obj->lunch();
				}else if($className == 'Number'){
					$obj = new Number($r[0]);
					$obj->lunch();
				}else if($className == 'Phone'){
					$obj = new Phone($r[0]);
					$obj->lunch();
				}
			}
		}
		return true;
	}
}