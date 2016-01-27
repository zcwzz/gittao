<?php
return [
'modules'=>[  
                'class'=>'yii\gii\Module',  
                'allowedIPs'=>['127.0.0.1','::1','*']  
        ]  ,

    'components' => [ 
        'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=101.200.241.218;dbname=final',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];

