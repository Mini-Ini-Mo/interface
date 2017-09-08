<?php
namespace frontend\controllers;

use yii;
use frontend\controllers\CommonController;
use yii\web\Request;

class LoginController extends CommonController
{
	/**
	* method Post
	* @date: 2017年9月6日 下午6:14:16
	* @author: cuik
	*/
	public function actionIndex()
	{
		$request = Yii::$app->request;
		
		if(!$request->isPost)
		{
			$this->returnJson('1', 'sdfd');
		}else{
			
			
			$this->returnJson('0');
		}
	}
}