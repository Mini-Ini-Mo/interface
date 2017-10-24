<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;

class CustomGoodController extends ActiveController
{
	public $modelClass = 'api\models\CustomGoods';
	public $serializer = [
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
		unset($actions['index'],$actions['delete'],$actions['update']);
		return $actions;
	}
	
	public function actionIndex($status=1,$isDelete=0)
	{
		$modelClass = $this->modelClass;
		$query = $modelClass::find();
		
		if($status){
			$query->where(['status'=>$status]);
		}
		
		if($isDelete){
			$query->andWhere(['is_delete'=>$isDelete]);
		}
		
		return new ActiveDataProvider([
			'query'=>$query,
			'sort'=>[
				'defaultOrder'=>[
					'sort'=>SORT_ASC,
					'goods_id'=>SORT_DESC,	
				]	
			]
		]);
	}
}