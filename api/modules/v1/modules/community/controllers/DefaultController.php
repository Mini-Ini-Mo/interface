<?php

namespace api\modules\v1\modules\community\controllers;

use yii\web\Controller;

/**
 * Default controller for the `community` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
