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
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
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
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
	'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['1.2.3.4', '127.0.0.1', '*'],
        ],
    ],
    'params' => $params,
];
