<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_user".
 *
 * @property string $user_id
 * @property string $user_name
 * @property string $password
 * @property string $email
 * @property string $phone_mob
 * @property integer $password_level
 * @property string $salt
 * @property string $head_img
 * @property integer $if_deleted
 * @property string $added_s_id
 * @property integer $ugrade
 * @property string $reg_way
 * @property string $logintoken
 * @property string $cas_ticket
 * @property string $gcate_id
 * @property string $gcate_id_1
 * @property string $gcate_id_2
 * @property string $gcate_id_3
 * @property string $gcate_id_4
 * @property string $user_source
 * @property string $last_login_time
 * @property string $login_count
 * @property integer $group_id
 */
class User extends \yii\db\ActiveRecord
{
	//不可以修改
	const PWD_KEY = '11111111111111';
	const PWD_SALT = 'xcpt';
	
	public static function findIdentityByAccessToken($token, $type = null){
         return static::findOne([
		     'access_token' => $token
		 ]);
	}
		
    public function getId(){
		return $this->id;
	}
	
	public function getAuthKey(){
		return $this->authKey;
	}
				
    public function validateAuthKey($authKey){
	 	return $this->authKey === $authKey;
	}
	
	public static function findIdentity($id){
		return static::findOne($id);
	}
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password_level', 'if_deleted', 'ugrade', 'gcate_id', 'gcate_id_1', 'gcate_id_2', 'gcate_id_3', 'gcate_id_4', 'last_login_time', 'login_count', 'group_id'], 'integer'],
            [['group_id'], 'required'],
            [['user_name', 'email', 'cas_ticket', 'user_source'], 'string', 'max' => 60],
            [['password', 'logintoken'], 'string', 'max' => 32],
            [['phone_mob'], 'string', 'max' => 11],
            [['salt'], 'string', 'max' => 4],
            [['head_img'], 'string', 'max' => 100],
            [['added_s_id'], 'string', 'max' => 255],
            [['reg_way'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'password' => 'Password',
            'email' => 'Email',
            'phone_mob' => 'Phone Mob',
            'password_level' => 'Password Level',
            'salt' => 'Salt',
            'head_img' => 'Head Img',
            'if_deleted' => 'If Deleted',
            'added_s_id' => 'Added S ID',
            'ugrade' => 'Ugrade',
            'reg_way' => 'Reg Way',
            'logintoken' => 'Logintoken',
            'cas_ticket' => 'Cas Ticket',
            'gcate_id' => 'Gcate ID',
            'gcate_id_1' => 'Gcate Id 1',
            'gcate_id_2' => 'Gcate Id 2',
            'gcate_id_3' => 'Gcate Id 3',
            'gcate_id_4' => 'Gcate Id 4',
            'user_source' => 'User Source',
            'last_login_time' => 'Last Login Time',
            'login_count' => 'Login Count',
            'group_id' => 'Group ID',
        ];
    }
    
    /**
    * 生成密码
    * @date: 2017年9月14日 上午10:18:43
    * @author: cuik
    */
    private function _makePwd($pwd)
    {
    	return md5(md5($pwd.self::PWD_KEY.self::PWD_SALT));
    }
    
    /**
    * 登录
    * @date: 2017年9月14日 上午10:37:07
    * @author: cuik
    */
    public function login($username,$pwd)
    {
    	$model = self::findOne(['phone_mob'=>$username]);
   
    	if(!$model){
    		return false;
    	}
    	
    	if($this->_makePwd($pwd) != $model->password){
    		return false;
    	}
    	
    	return [
    		'uid'=>intval($model->user_id),
    		'gid'=>intval($model->group_id),
    		'username'=>intval($model->phone_mob),
    	];
    }
}
