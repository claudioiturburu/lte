<?php
use yii\web\Request;

$params = require(__DIR__ . '/params.php');
$baseUrl = str_replace('/web', '', (new Request)->getBaseUrl());  //para sacar el /web
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'ElkhXMiJC88JyvUm89nHCqN7J3SkkSXN',
			'baseUrl' => $baseUrl, //para sacar el /web
		],
        'assetManager' => [
        	'bundles' => [
        		'dmstr\web\AdminLteAsset' => [
        			'skin' => 'skin-red',
        		],
        	],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
			'baseUrl' => $baseUrl, //para sacar el /web
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [						
					//Para uuid's
					//Matchea solo para módulos
					'<module:\w+>/<controller:\w+>/<id:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}>'=>'<module>/<controller>/view',
					'<module:\w+>/<controller:\w+>/<action:(create|update)>/<id:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}>'=>'<module>/<controller>/<action>',

					//Actua fuera de módulos
					'<controller:\w+>/<id:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}>'=>'<controller>/view',
					'<controller:\w+>/<action:(create|update)>/<id:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}>'=>'<controller>/<action>',
					
					//Para id's
					//Matchea solo para módulos
					'<module:\w+>/<controller:\w+>/<id:d+>'=>'<module>/<controller>/view',
					'<module:\w+>/<controller:\w+>/<action:(create|update)>/<id:d+>'=>'<module>/<controller>/<action>',

					//Actua fuera de módulos
					'<controller:\w+>/<id:d+>'=>'<controller>/view',
					'<controller:\w+>/<action:(create|update)>/<id:d+>'=>'<controller>/<action>',		
			],
		],	
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.21', ] 
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.21', ] 
    ];
}

return $config;
