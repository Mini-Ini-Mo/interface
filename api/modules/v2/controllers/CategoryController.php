<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class CategoryController extends ActiveController
{
	public $modelClass = 'common\models\Category';
	
	public function actions()
	{
		$actions = parent::actions();
		unset($actions['index'],$actions['update'],$actions['delete'],$actions['create']);
		return $actions;
	}
	
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
	* 返回品类列表
	* @date: 2017年12月6日 下午4:27:03
	* @author: cuik
	*/
	public function actionIndex()
	{
		$modelClass = $this->modelClass;
	
		$data = [];
		//获取顶级品类
		$first = $modelClass::find()->select([
			'gcate_id AS id',
			'gcate_name AS name',
			'com_id AS cid',
			'parent_id AS pid',
			'if_show AS is_show',
			'sort_order AS sort'
		])->where(['parent_id'=>0])->asArray()->all();
		
		foreach($first as $k=>$f){
			$data[$k] = $f;
			//获取二级品类
			$second = $modelClass::find()->select([
				'gcate_id AS id',
				'gcate_name AS name',
				'com_id AS cid',
				'parent_id AS pid',
				'if_show AS is_show',
				'sort_order AS sort'
			])->where(['parent_id'=>$f['id']])->asArray()->all();
			if($second){
				$data[$k]['children'] = $second;
				foreach($second as $kk=>$e){
					//获取三级品类
					$third = $modelClass::find()->select([
						'gcate_id AS id',
						'gcate_name AS name',
						'com_id AS cid',
						'parent_id AS pid',
						'if_show AS is_show',
						'sort_order AS sort'
					])->where(['parent_id'=>$e['id']])->asArray()->all();
					if($third){
						$data[$k]['children'][$kk]['children'] = $third;
					}
				}
			}
		}
	
		return $data;
	}
}