<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
//        'css/styles.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/responsive.css',
        'css/style.css',
    ];
    public $js = [
//        'js/scripts.js',
        'js/bootstrap.js',
        'js/jquery.1.11.1.js',
        'js/jquery.isotope.js',
        'js/main.js',
        'js/modernizr.custom.js',
        'js/owl.carousel.js',
        'js/SmoothScroll.js',
    ];
    public $font = [
        'fonts/font-awesome/css/font-awesome.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
