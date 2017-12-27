<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_projects_join".
 *
 * @property string $join_id
 * @property integer $project_id
 * @property integer $shop_id
 * @property string $shop_name
 * @property integer $user_id
 * @property string $lianxiren
 * @property string $lianxiren_p
 * @property string $price
 * @property string $tb_price
 * @property integer $zfstatus
 * @property string $projects
 * @property string $requirement
 * @property string $description
 * @property string $describe
 * @property integer $baoming_time
 * @property integer $toubiao_time
 * @property integer $add_time
 * @property integer $status
 * @property integer $if_pass
 * @property integer $if_close
 * @property integer $if_pay
 * @property integer $is_encrypt
 * @property integer $is_read
 */
class CallForBidJoin extends \yii\db\ActiveRecord
{
	//是否删除（1未删除， 2已删除）
	public $if_close_mean = [1 =>'未删除',2 =>'已删除'];
	public $pjstatus_mean = [0=>'已报名',1=> '已入围',2=>'已中标'];
	public static $encrypt_mean = ['解密','加密'];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_projects_join';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'shop_id', 'user_id', 'zfstatus', 'baoming_time', 'toubiao_time', 'add_time', 'status', 'if_pass', 'if_close', 'if_pay', 'is_encrypt', 'is_read'], 'integer'],
            [['shop_name', 'tb_price', 'zfstatus', 'baoming_time', 'toubiao_time', 'add_time', 'if_pay'], 'required'],
            [['price'], 'number'],
            [['projects', 'requirement', 'description', 'describe'], 'string'],
            [['shop_name'], 'string', 'max' => 200],
            [['lianxiren', 'lianxiren_p'], 'string', 'max' => 64],
            [['tb_price'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'join_id' => 'Join ID',
            'project_id' => 'Project ID',
            'shop_id' => '公司',
            'shop_name' => '公司',
            'user_id' => '用户',
            'lianxiren' => '联系人',
            'lianxiren_p' => '联系方式',
            'price' => '投标费',
            'tb_price' => '投标总价',
            'zfstatus' => 'Zfstatus',
            'projects' => 'Projects',
            'requirement' => '对企业要求',
            'description' => '项目描述',
            'describe' => '投标说明',
            'baoming_time' => '报名时间',
            'toubiao_time' => '投标时间',
            'add_time' => '添加时间',
            'status' => '项目状态',
            'if_pass' => '审核',
            'if_close' => 'If Close',
            'if_pay' => 'If Pay',
            'is_encrypt' => '加密状态',
            'is_read' => 'Is Read',
        ];
    }
}
