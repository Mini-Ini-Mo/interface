<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;

/**
 * Default controller for the `company` module
 */
class ComController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $modelClass = 'api\models\Company';
    public $serializer = [
    		'class' => 'yii\rest\Serializer',
    		//'collectionEnvelope' => 'items',
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
    
    public function actions()
    {
    	$actions = parent::actions();
    	
    	unset($actions['index'],$actions['update'],$actions['create'],$actions['delete']);
    	
    	return $actions;
    }
    
    public function actionIndex($gid=null,$com_name=null ,$cate_name=null)
    {
    	$modelClass = $this->modelClass;
    	
    	$query = $modelClass::find();
    	
    	$condition = [];
    	
    	if($gid){
    		$query->where(['group_id'=>$gid]);
    	}
    	
    	if($com_name){
    		$query->andFilterWhere(['like','com_name',$com_name]);
    	}
    	
    	if($cate_name){
    		$query->andFilterWhere(['like','com_main_production',$cate_name]);
    	}
    	
    	return new ActiveDataProvider([
    			'query' => $query,
    		
    			'sort'=>[
    				'defaultOrder'=>[
    					'com_id' => SORT_DESC,
    				],	
    			]
    	]);
    }
  
}
