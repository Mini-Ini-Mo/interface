<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',
    'components' => [
    	'request' => [
    		// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    		'cookieValidationKey' => 'GF8A_0ge2uGhladXyag4ky3nUCSLYhzR',
    		'parsers' => [
    			'application/json' => 'yii\web\JsonParser',
    		]
    	],
    		'response'=>[
    			'class'=> 'yii\web\Response',
    			'on beforeSend' => function($event){
    				$response = $event->sender;
    				$response->data = [
    						'code'=>$response->getStatusCode(),
    						'data'=>$response->data,
    						'message'=>$response->statusText
    				];
    				$response->format = yii\web\Response::FORMAT_JSON;
    			}
    		],
       /*  'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],  */
    		'user' => [
    				'identityClass' => 'api\models\User',
    				'enableAutoLogin' => true,
    				'enableSession' => false,
    		],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-api',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
    'modules' => [
    	'v1' => [
    		'class' => 'api\modules\v1\Module',
    	],
    	'v2' => [
    		'class' => 'api\modules\v2\Module',
    	],
    ],
];
