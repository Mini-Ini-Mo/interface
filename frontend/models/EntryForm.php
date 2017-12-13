<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
	public $name;
	public $email;
	
	public function rules()
	{
		return [
			[['name','email'],'required'],
			['email','email']
		];
	}
	
	public function attributeLabels()
	{
		return [
			'name'=>'Your name',
			'email'=>'Your email'
		]; 
	}
	
	public function scenarios()
	{
		return [
			'entry'=>['name'],	
		];
	}
	
}