<?php

namespace frontend\modules\user\controllers;

use yii\web\Controller;
use frontend\behaviors\verify\VerifyControl;
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
				'only'=>['index','create'],
				'rules'=>[
					[
						['name,pwd','required'],
						['pwd','number'],
						['name','phone'],
					],
					[
						['name,pwd','Required'],
						['pwd','number'],
						['name','lenght',41],
					]
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
