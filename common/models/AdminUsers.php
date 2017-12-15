<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;

/**
 * This is the model class for table "xcpt_admin_users".
 *
 * @property string $user_id
 * @property string $username
 * @property string $nickname
 * @property string $head_img
 * @property string $password
 * @property integer $group_id
 * @property string $rndCode
 * @property integer $enable
 * @property integer $create_time
 * @property integer $shequ_id
 */
class AdminUsers extends \yii\db\ActiveRecord implements IdentityInterface
{
	const STATUS_DELETED = 0;
	const STATUS_ACTIVE = 10;
	
	public $auth_key;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_admin_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'rndCode', 'create_time'], 'required'],
            [['group_id', 'rndCode', 'enable', 'create_time', 'shequ_id'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['nickname', 'password'], 'string', 'max' => 32],
            [['head_img'], 'string', 'max' => 150],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'nickname' => 'Nickname',
            'head_img' => 'Head Img',
            'password' => 'Password',
            'group_id' => 'Group ID',
            'rndCode' => 'Rnd Code',
            'enable' => 'Enable',
            'create_time' => 'Create Time',
            'shequ_id' => 'Shequ ID',
        ];
    }
    
    /**
     * 通过用户名 返回用户记录
     * @date: 2017年9月25日 下午3:11:01
     * @author: cuik
     */
    public static function findByUsername($username)
    {
    	return static::findOne(['username'=>$username]);
    }
    
    /**
     * 校验密码
     */
    public function validatePassword($username,$password)
    {
    	$model = static::findOne(['username'=>$username]);
    	$pwd = self::makePwd($password,$model->rndCode);

    	if($model->password === $pwd){
    		return true;
    	}
    	return false;
    }
    
    /**
     * 生成密码
     * @date: 2017年9月14日 上午10:18:43
     * @author: cuik
     */
    public static function makePwd($pwd,$code)
    {
    	return md5(md5($pwd).$code);
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    	throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    
    /**
     * @inheritdoc
     */
    public function getId()
    {
    	return $this->getPrimaryKey();
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
    	return $this->auth_key;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
    	return $this->getAuthKey() === $authKey;
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
    	return static::findOne(['user_id' => $id
    			//, 'status' => self::STATUS_ACTIVE
    			]);
    }
    
    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
    	if (!static::isPasswordResetTokenValid($token)) {
    		return null;
    	}
    
    	return static::findOne([
    			'password_reset_token' => $token,
    			'status' => self::STATUS_ACTIVE,
    	]);
    }
}
