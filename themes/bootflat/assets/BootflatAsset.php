<?php
namespace bootflat\assets;

use yii\web\AssetBundle;

class BootflatAsset extends AssetBundle
{
    public $sourcePath = '@bootflat/dist';
    public $css = [
        'css/bootflat.min.css',
		    'css/main.css',
    ];

    public $js = [
        'js/icheck.min.js',
        'js/jquery.fs.selecter.min.js',
        'js/jquery.fs.stepper.min.js',        
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'bootflat\assets\FontAwesomeAsset',
    ];
}
