<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class DirectSalesController extends ActiveController
{
	public $modelClass = 'api\models\DirectSales';
	public $serializer = [
		'class'=>'yii\rest\Serializer',
		'collectionEnvelope'=>'items'
	];
	
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class'=>QueryParamAuth::className(),
			'tokenParam'=>'token',
			'optional'=>[
				'index'	
			]
		];
		return $behaviors;
	}
	
	public function actions()
	{
		$actions = parent::actions();
		unset($actions['delete'],$actions['update'],$actions['create']);
		return $actions;
	}
}