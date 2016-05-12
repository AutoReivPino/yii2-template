<?php
/**
 * @author JingX <AutoreivPino@gmail.com>
 */

namespace backend\assets;

use yii\web\AssetBundle;

class AceAsset extends AssetBundle
{
    public $baseUrl = '@web/ace/assets';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/4.2.0/css/font-awesome.min.css',
        'fonts/fonts.googleapis.com.css',
        'css/ace.min.css',
    ];
    public $js = [
        'js/ace-extra.min.js',
        'js/bootstrap.min.js',
        'js/ace-elements.min.js',
        'js/ace.min.js',
    ];
    public $depends = [
        'backend\assets\JqueryAsset'
    ];
}