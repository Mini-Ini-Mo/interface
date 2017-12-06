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
	
	public function actionIndex()
	{
		$modelClass = $this->modelClass;
	
		$data = [];
		//获取顶级品类
		$first = $modelClass::find()->where(['parent_id'=>0])->all();
		
		foreach($first as $k=>$f){
			$data[$k] = (array)$f;
			//获取二级品类
			$second = $modelClass::find()->where(['parent_id'=>$f['gcate_id']])->all();
			if($second){
				$data[$k]['children'] = (array)$second;
				foreach($second as $kk=>$e){
					//获取三级品类
					$third = $modelClass::find()->where(['parent_id'=>$e['gcate_id']])->all();
					if($third){
						$data[$k]['children'][$kk]['children'] = (array)$third;
					}
				}
			}
		}
	
		return $data;
	}
}