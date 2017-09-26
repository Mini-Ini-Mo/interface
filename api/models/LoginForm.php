<?php
namespace api\models;

use yii\base\Model;
use api\models\User;
use yii\base\Response;
use api\components\Hint;

class LoginForm extends Model
{
	public $username;
	public $password;
	
	private $_user;
	
	const GET_ACCESS_TOKEN = 'generate_access_token';
	
	public function init()
	{
		parent::init();
		$this->on(self::GET_ACCESS_TOKEN,[$this,'onGenerateAccessToken']);
	}
	
	/**
	* @inhreitdoc
	* 对客户端表单数据进行验证的rule
	*/
	public function rules()
	{
		return [
			[['username','password'],'required'],
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
			$this->_user = $this->getUser();
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
			$this->trigger(self::GET_ACCESS_TOKEN);
			return $this->_user;
		}else{
			Hint::info(2000);
		}
	}
	
	/**
	* 根据用户名获取用户的认证信息
	* @return: User|null
	*/
	public function getUser()
	{
		if($this->_user === null){
			$this->_user = User::findByUsername($this->username);
		}
		return $this->_user;
	}
	
	/**
	* 登录校验成功后，为用户生成新的token
	* 如果token失效，则重新生成token
	*/
	public function onGenerateAccessToken()
	{
		if(!User::accessTokenIsVaild($this->_user->access_token)){
			$this->_user->generateAccessToken();
			$this->_user->save(false);
		}
	}
	
}