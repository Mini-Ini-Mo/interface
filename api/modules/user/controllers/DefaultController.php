<?php

namespace api\modules\user\controllers;

use yii\web\Controller;
use api\behaviors\verify\VerifyControl;
use yii\filters\VerbFilter;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{
	public function behaviors(){
		return [
			'verify'=>[
				'class'=>VerifyControl::className(),
				'only'=>['index'],
				'rules'=>[
					[
						['name,pwd','required'],
						['pwd','number'],
						['name','phone'],
					],
				]
			],
			'verbs'=>[
				'class'=>VerbFilter::className(),
				'actions'=>[
					'index'=>['post'],	
				]
			]
		];
	}
	
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
