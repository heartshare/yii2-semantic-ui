<?php
/**
 * @link https://github.com/pgrzelka/yii2-semantic-ui
 * @copyright Copyright (c) 2014 Piotr Grzelka
 * @license MIT
 */

namespace codeexpert\semanticui;

class Widget extends \yii\base\Widget
{
    public $options = [];

    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

}
