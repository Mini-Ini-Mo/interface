<?php
namespace api\modules\user\controllers;

use yii;
use yii\web\Controller;
use api\behaviors\verify\VerifyControl;
use yii\filters\VerbFilter;

class RegisterController extends Controller
{
	public function behaviors()
	{
		return [
			'verify'=>[
				'class'=>VerifyControl::className(),
				'only'=>['index'],
				'rules'=>[
					[
						['username,pwd,gid','required'],
						['username','phone'],
						['gid','number'],
					]
				]
			],
			'verbs'=>[
				'class'=>VerbFilter::className(),
				'actions'=>[
					'index'=>['post'],
				],
			],
		];
	}
	
	public function actionIndex()
	{
		$request = Yii::$app->request;
		$username = $request->get('username');
		$pwd = $request->get('pwd');
		$gid = $request->get('gid');
	}
}