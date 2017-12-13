<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Country;
use yii\data\Pagination;

class CountryController extends Controller
{
	public function behaviors()
	{
		return [
			'timeFilter'=>[
				'class'=>'frontend\components\ActionTimeFilter',
				'only'=>['index'],
			],	
		];
	}
	
	public function actionIndex()
	{
		$query = Country::find();
		
		$pagination = new Pagination([
			'defaultPageSize'=>5,
			'totalCount'=>$query->count(),
		]);
		
		$countries = $query->orderBy('name')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();
		
		return $this->render('index',[
				'countries'=>$countries,
				'pagination'=>$pagination,
		]);
	}
}