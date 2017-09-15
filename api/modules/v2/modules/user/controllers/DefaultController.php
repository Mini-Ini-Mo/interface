<?php

namespace api\modules\v2\modules\user\controllers;

use yii\web\Controller;
use yii\rest\ActiveController;

/**
 * Default controller for the `user` module
 */
class DefaultController extends ActiveController
{
	public $modelClass = 'api\models\User';
}
