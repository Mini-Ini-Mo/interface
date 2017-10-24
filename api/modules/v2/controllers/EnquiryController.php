<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;

class EnquiryController extends ActiveController
{
	public $modelClass = 'api\models\EnquiryOrder';
	public $serializer = [
			'class' => 'yii\rest\Serializer',
			'collectionEnvelope' => 'items',
	];
	
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
		unset($actions['index'],$actions['delete'],$actions['create']);
		return $actions;
	}
	
	public function actionIndex($uid=null,$cateId=null,$audit=null)
	{
		$modelClass = $this->modelClass;
		$query = $modelClass::find();
			
		if($uid){
			$query->where(['create_by_user_id'=>$uid]);
		}
			
		if($cateId){
			$query->andWhere(['cate_id'=>$cateId]);
		}
		
		if($audit){
			$query->andWhere(['audit'=>$audit]);
		}
			
		return new ActiveDataProvider([
			'query' => $query,
	
			'sort'=>[
				'defaultOrder'=>[
					'oid' => SORT_DESC,
				],
			]
		]);
	}
}