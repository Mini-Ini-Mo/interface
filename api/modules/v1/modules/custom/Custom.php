<?php

namespace api\modules\v1\modules\custom;

/**
 * custom module definition class
 */
class Custom extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'api\modules\v1\modules\custom\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
