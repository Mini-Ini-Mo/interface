<?php
namespace api\modules\v2\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use api\models\LoginForm;
use yii\web\IdentityInterface;
use api\models\RegisterForm;
use api\components\Hint;
use yii\web\MethodNotAllowedHttpException;
use yii\filters\VerbFilter;

class UserController extends ActiveController
{
	public $modelClass = 'api\models\User';
	
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
				'login','register','index','view'
			]
		];
		
		$behaviors['verbs'] = [
			'class'=> VerbFilter::className(),
			'actions'=>[
				'login' => ['post'],
				'register'=>['post'],
				'index'=>['get'],
			],
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
	
	/**
	* 用户注册
	* @date: 2017年9月25日 下午4:22:00
	* @author: cuik
	*/
	public function actionRegister()
	{
		$model = new RegisterForm();
		$model->setAttributes(\Yii::$app->request->post());
		if($user = $model->register()){
			if($user instanceof  IdentityInterface){
				Hint::info(0,null,['username'=>$user->phone_mob,'gid'=>$user->group_id]);
			}else{
				Hint::info(500);
			}
		}
	}
	
	/**
	* 用户登录
	* @date: 2017年9月25日 下午4:21:49
	* @author: cuik
	*/
	public function actionLogin()
	{
		$model = new LoginForm();
		$model->setAttributes(\Yii::$app->request->post());
		if($user = $model->login()){
			if($user instanceof  IdentityInterface){
				Hint::info(0,null,['token'=>$user->access_token]);
			}else{
				Hint::info(500);
			}
		}
	}
	
	public function checkAccess($action, $model=null, $params = [])
	{
		if($action === 'login'){
			if(!\Yii::$app->request->getIsPost()){
				throw new MethodNotAllowedHttpException();
			}
		}
	}
}