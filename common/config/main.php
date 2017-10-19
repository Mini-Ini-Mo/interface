<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
    	'db' => [
    		'class' => 'yii\db\Connection',
    		'dsn' => 'mysql:host=yz-pub-atlas-mysql.glodon.org;port=4022;dbname=wangcaiv3',
    		'username' => 'db_zfxc',
    		'password' => 'db_zfxc',
    		'charset' => 'utf8',
    	],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
