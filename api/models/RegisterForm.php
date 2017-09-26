<?php
namespace api\models;
use yii\db\ActiveRecord;
use api\models\User;

class RegisterForm extends ActiveRecord
{
	public $username;
	public $password;
	public $group_id;
	
	private $_user;
	
	public function rules()
	{
		return [
			[['username','password','group_id'],'required'],
			['username','string','length'=>11],
			['username','checkUsername'],
			['group_id','in','range'=>[5,7]],
		];
	}
	
	/**
	* 用户注册
	* @date: 2017年9月25日 下午5:03:12
	* @author: cuik
	*/
	public function register()
	{
		if($this->validate()){
			$this->_user = $this->getUser();
			$this->_user->attributes = [
				'phone_mob'=>$this->username,
				'user_name'=>'Guest_'.rand(10000,99999).substr(time(), -4),
				'password'=>User::makePwd($this->password),
				'group_id'=>$this->group_id,
			];
			if($this->_user->save()){
				return $this->_user;
			}else{
				return $this->_user->getErrors();
			}
		}else{
			return null;
		}
	}
	
	/**
	* 检查用户名
	* @date: 2017年9月25日 下午4:50:34
	* @author: cuik
	*/
	public function checkUsername($attribute,$params)
	{
		if(!$this->hasErrors()){
			$this->_user = $this->getUser();
			if(!$this->_user || !$this->_user->checkUsername($this->username)){
				$this->addError($attribute,'用户名不可用');
			}
		}
	}
	
	/**
	* 关联User表
	* @date: 2017年9月25日 下午4:45:41
	* @author: cuik
	*/
	public function getUser()
	{
		if($this->_user === null){
			$this->_user = new User();
		}
		return $this->_user;
	}
}