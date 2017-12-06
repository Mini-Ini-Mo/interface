<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class EnquiryCateController extends ActiveController
{
	public $modelClass = 'api\models\EnquiryCate';
	
	/**
	* 禁止删除此方法
	* @date: 2017年9月25日 下午3:05:04
	* @author: cuik
	*/
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
				'class'=>QueryParamAuth::className(),
				'tokenParam'=>'token',
				'optional'=>[
						'index','view'
				]
		];
	
		return $behaviors;
	}
	
	/**
	 * 禁止删除此方法
	 * @date: 2017年9月25日 下午3:04:43
	 * @author: cuik
	 */
	public function actions()
	{
		$actions = parent::actions();
		unset($actions['delete'],$actions['create']);
		return $actions;
	}
}