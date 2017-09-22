<?php
namespace api\modules\v2\controllers;
use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use api\models\LoginForm;
use yii\web\IdentityInterface;

class UserController extends ActiveController
{
	public $modelClass = 'api\models\User';
	
	public function behaviors()
	{
		return ArrayHelper::merge(parent::behaviors(),[
				'authenticator'=>[
					'class'=>QueryParamAuth::className(),
					'tokenParam'=>'token',
					'optional'=>[
						'login'
					]
				]
		]);
	}
	
	public function actions()
	{
		$actions = parent::actions();
		//$actions['login'] = [$this,'login'];
		return $actions;
	}
	
	public function actionLogin()
	{
		$model = new LoginForm();
		$model->setAttributes(\Yii::$app->request->post());
		if($user = $model->login()){
			if($user instanceof  IdentityInterface){
				return $user->access_token;
			}else{
				return $user->errors;
			}
		}
	}
}