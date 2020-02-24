<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use common\assets\Html5shiv;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    //public $sourcePath = '@frontend/web';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    /**
     * @var array
     */
    public $css = [
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/owl.carousel.min.css',
        'css/all.css',
        'css/flaticon.css',
        'css/themify-icons.css',
        'css/magnific-popup.css',
        'css/slick.css',
        'css/style.css',
        'css/nice-select.css',
        'css/price_rangs.css',
        'css/lightslider.min.css'


    ];

    /**
     * @var array
     */
    public $js = [
        'js/jquery-1.12.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.magnific-popup.js',
        'js/swiper.min.js',
        'js/mixitup.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.nice-select.min.js',
        'js/slick.min.js',
        'js/jquery.counterup.min.js',
        'js/waypoints.min.js',
        'js/contact.js',
        'js/jquery.ajaxchimp.min.js',
        'js/jquery.form.js',
        'js/jquery.validate.min.js',
        'js/mail-script.js',
        'js/jquery.form.js',
        'js/price_rangs.js',
        'js/lightslider.min.js',
        'js/custom.js',


    ];

    /**
     * @var array
     */
    /*public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
    ];*/
}
