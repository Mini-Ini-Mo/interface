<?php

namespace api\modules\v2;

/**
 * v2 module definition class
 */
class module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'api\modules\v2\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->modules = [
        		
	    ];
        
        $this->components = [
       
        
        ];
        \Yii::$app->user->enableSession = false;
    }
}