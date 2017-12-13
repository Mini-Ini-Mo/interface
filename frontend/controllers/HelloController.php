<?php
namespace frontend\controllers;
use yii\web\Controller;

class HelloController extends Controller
{
	public function actionIndex()
	{
		//echo 33;
		$hello_str = 'Hello God<script>alert(44);</script>';
		
		$data = array();
		$data['hello_str'] = $hello_str;
		
		return $this->renderPartial('index',$data);
	}
}
