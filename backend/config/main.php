<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
'bootstrap' => ['gii'],
	 'modules' => [
		 'gii' => ['class' => 'yii\gii\Module'],
	],
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__), 
    
    'controllerNamespace' => 'backend\controllers',
    'components' => [
	'request' => [
            'enableCookieValidation' => true,
            'cookieValidationKey' => '123123',
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
    'params' => $params,
];
