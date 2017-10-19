<?php
$params = array_merge(
		require(__DIR__ . '/../../common/config/params.php'),
		require(__DIR__ . '/../../common/config/params-local.php'),
		require(__DIR__ . '/params.php'),
		require(__DIR__ . '/params-local.php')
		);

$config = [
	'language' => 'zh-CN',
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
    	'user' => [
    		'identityClass' => 'api\models\User',
    		'enableAutoLogin' => true,
    		'enableSession' => false,
    	], 
    	'urlManager'=>[
    		'enablePrettyUrl' => true,
    		'showScriptName' => false,
    		'enableStrictParsing' =>true,
    		'rules' => [
    			[
    				'class' => 'yii\rest\UrlRule',
    				'controller' => ['v2/user'],
    				'extraPatterns' => [
    					'POST login' => 'login',
    					'POST register' => 'register'
    				],
    				//'pluralize'=>false,//禁用复数形式，建议使用
    			],
    			[
    				'class' => 'yii\rest\UrlRule',
    				'controller' => ['v2/nav'],
    			],
    			[
    				'class' => 'yii\rest\UrlRule',
    				'controller' => ['v2/com'],
    			],
    		], 
    	], 
    ],
	'params'=> $params,
	'modules' => [
		'v1' => [
            'class' => 'api\modules\v1\Module',
        ],	
		'v2' => [
			'class' => 'api\modules\v2\Module',
		],
	],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
