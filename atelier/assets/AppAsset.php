<?php

namespace atelier\assets;

use yii\web\AssetBundle;

/**
 * Main atelier application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/atelier.css',
    ];
    public $js = [
        'js/atelier.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
