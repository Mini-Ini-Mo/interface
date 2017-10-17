<?php
namespace api\modules\v2\modules\abc\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

/**
 * Default controller for the `company` module
 */
class CompanyController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $modelClass = 'api\models\Company';
    
    /**
     * 禁止删除此方法
     * @date: 2017年9月25日 下午3:05:04
     * @author: cuik
     */
    public function behaviors()
    {
    	$behaviors = parent::behaviors();
    	$behaviors['authenticator'] = [
    			'class'=>QueryParamAuth::className(),
    			'tokenParam'=>'token',
    	];
    	return $behaviors;
    }
}
