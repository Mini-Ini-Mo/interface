<?php
namespace frontend\components;

use yii;
use yii\base\ActionFilter;

class ActionTimeFilter extends ActionFilter
{
	private $_startTime;
	
	public function beforeAction($action)
	{
		$this->_startTime = microtime(true);
		echo "<br><br><br>".$this->_startTime;
		return parent::beforeAction($action);
	}
	
	public function afterAction($action, $result)
	{
		$time = microtime(true) - $this->_startTime;
		Yii::trace("Action '{$action->uniqueId}' spent $time second");
		return parent::afterAction($action, $result);
	}
}