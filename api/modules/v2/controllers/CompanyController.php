<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;
use Codeception\Verify;

/**
 * Default controller for the `company` module
 */
class CompanyController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $modelClass = 'api\models\Company';
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
    
    public function actions()
    {
    	$actions = parent::actions();
    	
    	unset($actions['index'],$actions['update'],$actions['create'],$actions['delete']);
    	
    	return $actions;
    }
    
    public function actionIndex($gid=null,$verify=null,$name=null ,$cate_name=null)
    {
    	$modelClass = $this->modelClass;
    	
    	$query = $modelClass::find();
 
    	if($gid){
    		$query->where(['gid'=>$gid]);
    	}
    	
    	if($verify){
    		$query->andWhere(['verify_status'=>$verify]);
    	}
    	
    	if($name){
    		$query->andFilterWhere(['like','name',$name]);
    	}
    	
    	if($cate_name){
    		$query->andFilterWhere(['like','main_production',$cate_name]);
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
