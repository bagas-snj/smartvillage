<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;


/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'templates/templates-breed/css/all.min1263.css?v=2ff27e',
    'templates/templates-breed/css/style.css',
    'templates/templates-breed/css/animate.css',
    'templates/templates-breed/owlcarousel/assets/owl.carousel.min.css',
    'templates/templates-breed/owlcarousel/assets/owl.theme.default.min.css',
    'templates/templates-breed/css/font-awesome.min.css',
    'templates/templates-breed/font/flaticon.css',
    'templates/templates-breed/css/bootstrap.offcanvas.min.css',
    'templates/templates-breed/css/custom.css',
    'templates/templates-breed/css/responsive.css',

    ];
    public $js = [
    'templates/templates-breed/js/scripts.min1263.js?v=2ff27e',
    'templates/templates-breed/js/popper.min.js',
    'templates/templates-breed/js/smoothscroll.js',
    'templates/templates-breed/owlcarousel/owl.carousel.min.js',
    'templates/templates-breed/js/jquery.bootstrap.wizard.js',
    'templates/templates-breed/js/jquery.counterup.min.js',
    'templates/templates-breed/js/waypoints.min.js',
    'templates/templates-breed/js/bootstrap.offcanvas.min.js',
    'templates/templates-breed/js/pagescript.js',
    'templates/templates-breed/js/wow.min.js',

   
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];

    public $jsOptions = ['position'=>View::POS_HEAD];
}
