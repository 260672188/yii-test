<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use frontend\assets\AppAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //rel="stylesheet" type="text/css" media="all"
        //$this->registerCssFile($url, $options = [], $key = null);
        ['css/bootstrap.css','type'=>'text/css', 'media'=>'all'],
       [ 'css/animate.css', 'type'=>'text/css', 'media'=>'all'],
       [ 'css/style.css','type'=>'text/css', 'media'=>'all'],
        ['css/iconfont.css','type'=>'text/css', 'media'=>'all'],
    ];
    public $js = [
        'js/jquery-3.1.0.min.js',
        'js/bootstrap.js',
        'js/public.js',

    ];
    public $depends = [
     //  'yii\web\YiiAsset',
//  'yii\bootstrap\BootstrapAsset',

    ];

    //定义按需加载css方法，注意加载顺序在最后
//    public static function addCss($view, $cssfile) {
//        $view->registerCssFile('css/bootstraps.css', [AppAsset::className(), 'depends' => 'app\assets\AppAsset']);
//    }

//定义按需加载css方法，注意加载顺序在最后
//    public static function addCss($view,$css) {
////        $view->registerCssFile('css/sss.css', [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
//        $view->registerCssFile('@web/css/00bootstrap.css', [AppAsset::$css(),'depends'=>['frontend\assets\AppAsset']]);
//    }
}

