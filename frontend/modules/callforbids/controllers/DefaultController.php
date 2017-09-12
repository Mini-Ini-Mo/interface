<?php

namespace frontend\modules\callforbids\controllers;

use yii\web\Controller;

/**
 * Default controller for the `callforbids` module
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
