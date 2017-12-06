<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "xcpt_user".
 *
 * @property string $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property integer $password_level
 * @property string $salt
 * @property string $head_img
 * @property integer $is_delete
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
 * @property string $source
 * @property string $last_login_time
 * @property string $login_count
 * @property integer $gid
 * @property string $access_token
 * @property string $auth_key
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
	//定义场景
	const SCENARIO_LOGIN = 'login';
	const SCENATIO_REGISTER = 'register';
	const SCENATIO_CREATE = 'create';
	
	
	//不可以修改
	const PWD_KEY = '11111111111111';
	const PWD_SALT = 'xcpt';
	
	/**
	 * 生成access_token
	 */
	public function generateAccessToken()
	{
		$this->access_token = Yii::$app->security->generateRandomString().'_'.time();
	}
	
	/**
	 * 校验access_token
	 */
	public static function accessTokenIsVaild($token)
	{
		if(empty($token)){
			return false;
		}
	
		$timestamp = (int) substr($token,strrpos($token, '_')+1);
		$expire = Yii::$app->params['user.accessTokenExpire'];
		return $timestamp + $expire >= time();
	}
	
	/**
	* 检测用户名是否可用
	*/
	public function checkUsername($username)
	{
		$model = static::findByUsername($username);
		if(!$model)
			return true;
		else 
			return false;
	}
	
	/**
	 * 校验密码
	 */
	public function validatePassword($username,$password)
	{
		$model = static::findOne(['phone'=>$username]);
		$pwd = self::makePwd($password);
		if($model->password === $pwd){
			return true;
		}
		return false;
	}
	
	public static function findIdentityByAccessToken($token,$type = null)
	{
		if(!static::accessTokenIsVaild($token)){
			throw new \yii\web\UnauthorizedHttpException("token is invalid(无效的Token)");
		}
	
		return static::findOne(['access_token'=>$token]);
	}
	
	/**
	 * 通过id 找到身份
	 * @inheritdox
	 */
	public static function findIdentity($id)
	{
		return static::findOne($id);
	}
	
	/**
	 * 获取主键
	 * @date: 2017年9月25日 下午3:11:37
	 * @author: cuik
	 */
	public function getId()
	{
		return $this->getPrimaryKey();
	}
	
	public function getAuthKey()
	{
		return $this->auth_key;
	}
	
	/**
	 * 文件用途描述
	 * @date: 2017年9月25日 下午3:11:29
	 * @author: cuik
	 */
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey() === $authKey;
	}
	
	/**
	 * 通过用户名 返回用户记录
	 * @date: 2017年9月25日 下午3:11:01
	 * @author: cuik
	 */
	public static function findByUsername($username)
	{
		return static::findOne(['phone'=>$username]);
	}
	
	public function fields()
	{
		return [
			'uid'=>'id',
			'phone'=>'phone',
			'username'=>'name',
			'gid'=>'gid',
			'email'=>'email',
		];
	}
	
	public function extraFields()
	{
		return [
			'userInfoExt',
			'company'
		];
	}
	
	/**
	* Company
	* @date: 2017年10月17日 上午9:20:34
	* @author: cuik
	*/
	public function getCompany()
	{
		return $this->hasOne(Company::className(), ['owner_id'=>'id'])->where('owner_id=:uid',[':uid'=>$this->id]);
	}
	
	/**
	* UserInfoExt
	* @date: 2017年9月26日 下午5:27:48
	* @author: cuik
	*/
	public function getUserInfoExt()
	{
		return $this->hasOne(UserInfoExt::className(), ['id'=>'id'])->where('id=:uid',[':uid'=>$this->id]);
	}
	
	/**
	 * 生成密码
	 * @date: 2017年9月14日 上午10:18:43
	 * @author: cuik
	 */
	public static function makePwd($pwd)
	{
		return md5(md5($pwd.self::PWD_KEY.self::PWD_SALT));
	}
	
	public function scenarios()
	{
		$scenarios = parent::scenarios();
		$scenarios[self::SCENATIO_CREATE] = ['name','gid','password'];
		return $scenarios;	
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
            [['password_level', 'is_delete', 'ugrade', 'last_login_time', 'login_count', 'gid'], 'integer'],
            [['gid'], 'required'],
            [['name', 'email', 'cas_ticket', 'source'], 'string', 'max' => 60],
            [['password', 'logintoken'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 11],
            [['salt'], 'string', 'max' => 4],
            [['head_img'], 'string', 'max' => 100],
            [['added_s_id', 'access_token', 'auth_key'], 'string', 'max' => 255],
            [['reg_way'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'name' => 'User Name',
            'password' => 'Password',
            'email' => 'Email',
            'phone' => 'Phone Mob',
            'password_level' => 'Password Level',
            'salt' => 'Salt',
            'head_img' => 'Head Img',
            'is_delete' => 'If Deleted',
            'added_s_id' => 'Added S ID',
            'ugrade' => 'Ugrade',
            'reg_way' => 'Reg Way',
            'logintoken' => 'Logintoken',
            'cas_ticket' => 'Cas Ticket',
            'source' => 'User Source',
            'last_login_time' => 'Last Login Time',
            'login_count' => 'Login Count',
            'gid' => 'Group ID',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
        ];
    }
}
