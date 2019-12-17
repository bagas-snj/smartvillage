<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/ajax.css',
        'css/backend.css',
        'css/datatables.min.css',
        'css/site.css',
        'css/login.css',
        'js/iconpicker/dist/css/fontawesome-iconpicker.css',

    ];
    public $js = [
        'js/iconpicker/dist/js/fontawesome-iconpicker.js',
        'script/core.js',
        'script/datatables.min.js',
       


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = ['position'=>View::POS_HEAD];
}
