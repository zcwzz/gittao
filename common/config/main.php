<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=127.0.0.1;dbname=final',
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ], 
    ], 
	 
];