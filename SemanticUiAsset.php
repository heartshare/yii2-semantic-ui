<?php
/**
 * @link https://github.com/pgrzelka/yii2-semantic-ui
 * @copyright Copyright (c) 2014 Piotr Grzelka
 * @license MIT
 */

namespace codeexpert\semanticui;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Semantic UI css files.
 *
 * @author Piotr Grzelka <info@codeexpert.pl>
 * @since 2.0
 */
class SemanticUiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/semantic/ui/build/packaged/definitions/';
    public $css = [
        'css/semantic.min.css',
    ];
    public $js = [
        'javascript/semantic.min.js',
    ];
}
 
