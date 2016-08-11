<?php

namespace den67rus\jqueryHoverIntent;

use yii\web\AssetBundle;

/**
 * Assets of jquery-hoverIntent.
 */
class HoverIntentAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery-hoverintent';

    public $js = [
        'jquery.hoverIntent.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
