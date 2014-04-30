<?php
/**
 * @link https://github.com/pgrzelka/yii2-semantic-ui
 * @copyright Copyright (c) 2014 Piotr Grzelka
 * @license MIT
 */

namespace codeexpert\semanticui;

use yii\helpers\Html;

class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';
    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'ui button');
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);
    }
}
