<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;

class AdController extends ActiveController
{
	public $modelClass = 'api\models\Ad';
	public $seralizer = [
		'class'=>'yii\rest\Serializer',
		'collectionEnvelope'=>'items',
	];	

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class'=>QueryParamAuth::className(),
			'tokenParam'=>'token',
			'optional'=>[
				'index',	
			]
		];
		
		return $behaviors;
	}
	
	public function actions()
	{
		$actions = parent::actions();
		unset($actions['index'],$actions['delete'],$actions['create'],$actions['update']);
		return $actions;
	}
	
	public function actionIndex($positionId=null,$enable=1)
	{
		$modelClass = $this->modelClass;
		$query = $modelClass::find();
		
		if($positionId){
			$query->where(['position_id'=>$positionId,'enable'=>$enable]);
		}
		
		return new ActiveDataProvider([
			'query'=>$query,
			'sort'=>[
				'defaultOrder'=>[
					'id'=>SORT_DESC,	
				]	
			]
		]);
	}
}