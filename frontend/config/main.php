<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager'=>[
            'bundles'=>[
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => []
                ],
//                'yii\web\JqueryAsset' => [
//                    'sourcePath' => null,
//                    'js' => []
//                ],
            ],
            ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],


        "urlManager" => [
            //用于表明 urlManager 是否启用URL美化功能
            "enablePrettyUrl" => true,
            // 是否在URL中显示入口脚本
            "showScriptName" => false,
            'rules' => [
                ''=>'site/index',
              //  'service'=>'/site/service',
                'teamwork'=>'/site/teamwork',
                'contact'=>'/site/contact',
                'brand'=>'/site/brand',
                'service'=>'/site/service',
                'project'=>'/site/project',
                'oto'=>'/site/oto',


//                'info'=>'info/index',
//                'partner'=>'partner/index',
//              //  'lxwm'=>'page/lxwm',
//                'gywm'=>'page/gywm',
// //                'lxwm'=>'book/lxwm',
//                'lxwm'=>'page/lxwm',
//          //      'zs'=>'page/zs',
//                'business'=>'page/zs',
//				'mobile'=>'page/zs',
//                'app'=>'page/app',
                
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',


            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
