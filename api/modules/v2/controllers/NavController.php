<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class NavController extends ActiveController
{
	public $modelClass = 'api\models\Gcategory';
	
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
		$first = $modelClass::find()->where(['parent_id'=>0])->asArray()->all();
		
		foreach($first as $k=>$f){
			$data[$k] = $f;
			//获取二级品类
			$second = $modelClass::find()->where(['parent_id'=>$f['gcate_id']])->asArray()->all();
			if($second){
				$data[$k]['children'] = $second;
				foreach($second as $kk=>$e){
					//获取三级品类
					$third = $modelClass::find()->where(['parent_id'=>$e['gcate_id']])->asArray()->all();
					if($third){
						$data[$k]['children'][$kk]['children'] = $third;
					}
				}
			}
		}
		
		return $data;
	}
	
}