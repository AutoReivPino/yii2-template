<?php
/**
 * @author JingX <AutoreivPino@gmail.com>
 */

namespace backend\assets;

use yii\web\AssetBundle;

class JqueryAsset extends AssetBundle
{
    public $baseUrl = '@web/ace/assets';
    public $js = [
        'js/jquery.2.1.1.min.js',
    ];
}