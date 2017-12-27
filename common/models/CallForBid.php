<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_projects".
 *
 * @property string $project_id
 * @property string $project_sn
 * @property integer $shop_id
 * @property string $shop_name
 * @property integer $user_id
 * @property integer $shequ_id
 * @property string $lxr
 * @property string $lxr_p
 * @property string $project_name
 * @property string $default_logo
 * @property string $price
 * @property integer $region_id
 * @property string $region_name
 * @property integer $area_id
 * @property string $area_name
 * @property string $area_addr
 * @property integer $cate_id1
 * @property integer $cate_id2
 * @property integer $cate_id
 * @property string $cate_name
 * @property string $projects
 * @property string $requirement
 * @property string $description
 * @property integer $baoming_time
 * @property integer $toubiao_time
 * @property string $kaibiao_time
 * @property integer $add_time
 * @property integer $zb_status
 * @property integer $status
 * @property integer $tj_status
 * @property integer $if_pass
 * @property integer $if_close
 * @property string $xm_name
 * @property integer $pm_id
 * @property integer $open_way
 * @property integer $source
 * @property string $pricing
 * @property string $enable
 */
class CallForBid extends \yii\db\ActiveRecord
{
	public $status_mean = [10=>'报名中',20=>'报名已截止',30=>'已开标',100 =>'已结束'];
	public $open_way_mean = [1=>'公开开标',2=>'半公开开标',3=>'隐藏开标'];
	public $zbstatus_mean = [1=>'公开招标',2=>'邀请招标'];
	public $zfstatus_mean = [0=>'未支付',1=>'线下支付',2=>'线上支付'];
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id', 'user_id', 'shequ_id', 'region_id', 'area_id', 'cate_id1', 'cate_id2', 'cate_id', 'baoming_time', 'toubiao_time', 'kaibiao_time', 'add_time', 'zb_status', 'status', 'tj_status', 'if_pass', 'if_close', 'pm_id', 'open_way', 'source'], 'integer'],
            [['shop_name', 'shequ_id', 'price', 'region_id', 'region_name', 'area_id', 'area_name', 'cate_id1', 'cate_id2', 'cate_id', 'baoming_time', 'toubiao_time', 'kaibiao_time', 'add_time', 'status', 'tj_status'], 'required'],
            [['price', 'pricing'], 'number'],
            [['projects', 'requirement', 'description', 'enable'], 'string'],
            [['project_sn', 'region_name', 'area_name', 'cate_name'], 'string', 'max' => 32],
            [['shop_name', 'project_name', 'area_addr'], 'string', 'max' => 255],
            [['lxr', 'lxr_p'], 'string', 'max' => 64],
            [['default_logo'], 'string', 'max' => 128],
            [['xm_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_sn' => '项目编号',
            'shop_id' => '公司',
            'shop_name' => '公司',
            'user_id' => '用户',
            'shequ_id' => '用户',
            'lxr' => '联系人',
            'lxr_p' => '联系方式',
            'project_name' => '项目',
            'default_logo' => '项目图片',
            'price' => '投标费',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'area_id' => 'Area ID',
            'area_name' => 'Area Name',
            'area_addr' => 'Area Addr',
            'cate_id1' => '品类',
            'cate_id2' => '品类',
            'cate_id' => '品类',
            'cate_name' => '品类',
            'projects' => '项目概况',
            'requirement' => '对服务商要求',
            'description' => '采购物品',
            'baoming_time' => '报名截止时间',
            'toubiao_time' => '投标截止时间',
            'kaibiao_time' => '开标时间',
            'add_time' => '添加时间',
            'zb_status' => '招标类型',
            'status' => '项目状态',
            'tj_status' => 'Tj Status',
            'if_pass' => '审核',
            'if_close' => '是否删除',
            'xm_name' => 'Xm Name',
            'pm_id' => 'Pm ID',
            'open_way' => '开标方式',
            'source' => '数据来源',
            'pricing' => '浏览费用',
            'enable' => '启用费用',
        ];
    }
    
    /**
    * 关联报名表
    * @date: 2017年12月26日 下午4:10:17
    * @author: cuik
    */
    public function getCallForBidJoin()
    {
    	return $this->hasMany(CallForBidJoin::className(), ['project_id'=>'project_id']);
    }
}
