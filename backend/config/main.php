<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
	'language'=>'zh-CN',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'admin'=>[
			'class'=>'mdm\admin\Module'	
		],
    	//会员模块	
    	'company' => [
    		'class' => 'backend\modules\company\Module',
    	],
    	//内容模块
    	'content' => [
    		'class' => 'backend\modules\content\Module',
    	],
    	//交易管理	
    	'trade' => [
    		'class' => 'backend\modules\trade\Module',
    	],
    ],
    'components' => [
    	'authManager'=>[
    		'class'=>'yii\rbac\DbManager',	
    	],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\AdminUsers',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'urlManager' => [
             "enablePrettyUrl" => true,
			 "enableStrictParsing" => false,
			    "showScriptName" => false,
			    "suffix" => "",
			    "rules" => [        
			        "<controller:\w+>/<id:\d+>"=>"<controller>/view",  
			        "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"    
			    ],
        ],
    	'i18n' => [
    		'translations' => [
    			'*' => [
    				'class' => 'yii\i18n\PhpMessageSource',
    				'basePath' => '@app/messages', // if advanced application, set @frontend/messages
    				'sourceLanguage' => 'en',
    				'fileMap' => [
    					//'main' => 'main.php',
    				],
    			],
    		],
    	],
    ],
	'as access'=>[
		'class'=>'mdm\admin\components\AccessControl',
		'allowActions'=>[
			'site/*',
	
			'*',
		]
	],
    'params' => $params,
];
