<?php
namespace api\modules\v2\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
	public function actionIndex()
	{
		echo 33;
		die;
	}
}