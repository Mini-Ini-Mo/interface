<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\AdminUsers;

class LoginForm extends Model
{
	public $username;
	public $password;
	public $rememberMe = true;
	
	private $_user;
	
	/**
	* @inhreitdoc
	* 对客户端表单数据进行验证的rule
	*/
	public function rules()
	{
		return [
			[['username','password'],'required'],
			['rememberMe', 'boolean'],
			['password','validatePassword'],
		];
	}
	
	/**
	* 自定义验证密码
	* @date: 2017年9月21日 下午4:24:23
	* @author: cuik
	*/
	public function validatePassword($attribute,$params)
	{
		if(!$this->hasErrors()){
			$this->_user = $this->getAdminUsers();
			if(!$this->_user || !$this->_user->validatePassword($this->username,$this->password)){
				$this->addError($attribute,'用户名或密码错误');
			}
		}
	}
	
	/**
	* @inheritdoc
	*/
	public function attributeLabels()
	{
		return [
			'username'=>'用户名',
			'password'=>'密码',
		];
	}
	
	/**
	* 判断用户是否登录成功
	* @return boolean 
	*/
	public function login()
	{
		if($this->validate()){
			return Yii::$app->user->login($this->getAdminUsers(), $this->rememberMe ? 3600 * 24 * 30 : 0);
		}else{
			return;
		}
	}
	
	/**
	* 根据用户名获取用户的认证信息
	* @return: User|null
	*/
	public function getAdminUsers()
	{
		if($this->_user === null){
			$this->_user = AdminUsers::findByUsername($this->username);
		}
		return $this->_user;
	}

}