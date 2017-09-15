<?php

namespace api\modules\v1;

/**
 * v1 module definition class
 */
class module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'api\modules\v1\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $config = [
        	'modules' => [
        		'enquiry' => [
        			'class' => 'api\modules\v1\modules\enquiry\Enquiry',
        		],
        		'custom' => [
        			'class' => 'api\modules\v1\modules\custom\Custom',
        		],
        		'company' => [
        			'class' => 'api\modules\v1\modules\company\Company',
        		],
        		'community' => [
        			'class' => 'api\modules\v1\modules\community\Community',
        		],
        		'callforbids' => [
        			'class' => 'api\modules\v1\modules\callforbids\Callforbids',
        		],
        		'user' => [
        			'class' => 'api\modules\v1\modules\user\User',
        		],
        	],
        ];
    }
}
