<?php

namespace akiraz2\support\assets;

use yii\web\AssetBundle;

/**
 * Class TicketAsset
 * @package akiraz2\support\assets
 */
class TicketAsset extends AssetBundle
{
    public $sourcePath = '@vendor/maxodrom/yii2-ticket-support/assets/default';
    public $baseUrl = '@web';
    public $css = [
        'css/ticket-style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];
}
