<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_company".
 *
 * @property string $com_id
 * @property integer $group_id
 * @property integer $shequ_id
 * @property string $com_name
 * @property string $com_short_name
 * @property string $com_sn
 * @property integer $estate_type
 * @property string $com_bank
 * @property string $com_bank_num
 * @property string $com_zczj
 * @property string $com_fddbr
 * @property string $com_fddbr_dh
 * @property string $com_zzjgdm
 * @property string $com_gsglh
 * @property string $com_yyzzdm
 * @property string $com_yyzz_pic
 * @property string $com_zzjgdmz_pic
 * @property integer $com_sssq
 * @property string $com_rzdw
 * @property string $com_post_code
 * @property integer $com_mode
 * @property integer $com_level
 * @property string $com_main_production
 * @property string $com_main_industry
 * @property string $com_main_industry2
 * @property string $com_main_industry3
 * @property integer $com_staff_amount_level
 * @property integer $com_turnover_level
 * @property integer $com_type
 * @property integer $com_zbdjg
 * @property string $com_phone
 * @property string $com_fax
 * @property string $com_address_code
 * @property string $com_address_text
 * @property string $com_instructions
 * @property integer $create_time
 * @property integer $com_info_status
 * @property string $com_money
 * @property integer $cgrade
 * @property integer $region_id
 * @property string $region_name
 * @property string $domain
 * @property string $owner_name
 * @property integer $owner_id
 * @property string $owner_card
 * @property integer $credit_value
 * @property string $praise_rate
 * @property string $close_reason
 * @property integer $end_time
 * @property integer $sort_order
 * @property integer $recommended
 * @property integer $com_verify_status
 * @property string $com_logo
 * @property string $added_s_id
 * @property string $home_page
 * @property string $com_email
 * @property string $com_dsdjz
 * @property string $com_dsdjh
 * @property string $com_zjndjzc
 * @property string $com_zjndjzcfzl
 * @property string $com_fdctdkfdj
 * @property string $com_fdckfzzzs
 * @property string $com_gdbj
 * @property string $com_jsncwbb
 * @property string $com_source
 * @property string $com_main_category
 * @property string $com_reject_reason
 * @property integer $has_store
 * @property integer $store_level
 * @property integer $if_pop_window
 * @property string $contact_man
 * @property string $contact_man_tel
 * @property integer $prov_id
 * @property integer $city_id
 * @property integer $dist_id
 * @property string $prov_name
 * @property string $city_name
 * @property string $dist_name
 * @property string $tag_ids
 */
class Company extends \yii\db\ActiveRecord
{
	public static $store_level_arr = [0=>'无店铺',10=> '标准店',20=> '旗舰店',];
	
	//服务商是【全国、本地、战略、定制、红包】；需求商是 【会员、战略】
	public static $tag_arr = [1=>'全国',2=>'本地',3=>'战略',4=>'定制',5=>'红包',6=>'会员',7=>'中科',];
	
	public static $tag_group_arr = [5=>[0 => [3,6,7]],7=>	[0=>[1,2],1=>[3,4,5,7],],];
	
	public static function getTags($gid,$flag = false)
	{
		if($gid){
			$arr = self::$tag_group_arr[$gid];
		}
		if($flag)
		{
			return $arr;
		}else{
			if($gid == 7){
				$arr[0] = array_merge($arr[0],$arr[1]);
			}
			$values = array();
			foreach($arr[0] as $a){
				$values[$a] = self::$tag_arr[$a];
			}
			return $values;
		}
	}

	//经营模式
	public static $com_mode_arr = [1=>'生产厂家',2=>'经销代理',3=>'其他',];
	
	//公司规模
	public static $staff_amount_arr = [1=>'0-100人',2=>'101-300人',3=>'301-500人',4=>'501-1000人',5=>'1001-5000人',6=>'5000人以上'];
	
	//公司性质
	public static $com_type_arr = [1=>'国有企业',2=>'民营企业',3=>'外资企业',4=>'合资企业',5=>'其他'];
	
	//年营业额
	public static $com_turnover_arr = [1=>'100万以下',2=>'101-500万',3=>'501-1000万',4=>'1001-5000万',5=>'5001-20000万',6=>'20000万以上'];
	
	//申请状态
	public static $status = ['新申请','审核通过','未通过','已付费','企业关闭'];

	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'create_time', 'owner_id'], 'required'],
            [['group_id', 'shequ_id', 'estate_type', 'com_sssq', 'com_mode', 'com_level', 'com_staff_amount_level', 'com_turnover_level', 'com_type', 'com_zbdjg', 'create_time', 'com_info_status', 'cgrade', 'region_id', 'owner_id', 'credit_value', 'end_time', 'sort_order', 'recommended', 'com_verify_status', 'has_store', 'store_level', 'if_pop_window', 'prov_id', 'city_id', 'dist_id'], 'integer'],
            [['com_instructions'], 'string'],
            [['com_money', 'praise_rate'], 'number'],
            [['com_name', 'com_address_code', 'region_name'], 'string', 'max' => 100],
            [['com_short_name', 'com_bank_num', 'com_zczj', 'com_fddbr', 'com_fddbr_dh', 'com_zzjgdm', 'com_gsglh', 'com_yyzzdm', 'com_fax', 'prov_name', 'city_name', 'dist_name', 'tag_ids'], 'string', 'max' => 20],
            [['com_sn'], 'string', 'max' => 30],
            [['com_bank', 'com_yyzz_pic', 'com_zzjgdmz_pic', 'com_main_industry3', 'close_reason', 'com_logo', 'added_s_id', 'com_email', 'com_dsdjz', 'com_jsncwbb', 'com_main_category', 'com_reject_reason'], 'string', 'max' => 255],
            [['com_rzdw', 'com_dsdjh', 'com_zjndjzc', 'com_zjndjzcfzl', 'com_fdctdkfdj', 'com_fdckfzzzs', 'com_gdbj'], 'string', 'max' => 50],
            [['com_post_code'], 'string', 'max' => 10],
            [['com_main_production', 'com_main_industry', 'com_main_industry2', 'domain', 'owner_name', 'owner_card', 'com_source'], 'string', 'max' => 60],
            [['com_phone', 'contact_man'], 'string', 'max' => 32],
            [['com_address_text', 'home_page'], 'string', 'max' => 200],
            [['contact_man_tel'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'com_id' => 'Com ID',
            'group_id' => '公司类型',
            'shequ_id' => '所属社区',
            'com_name' => '公司名称',
            'com_short_name' => '公司简称',
            'com_sn' => '公司序列号',
            'estate_type' => 'Estate Type',
            'com_bank' => 'Com Bank',
            'com_bank_num' => 'Com Bank Num',
            'com_zczj' => '注册资金',
            'com_fddbr' => 'Com Fddbr',
            'com_fddbr_dh' => 'Com Fddbr Dh',
            'com_zzjgdm' => 'Com Zzjgdm',
            'com_gsglh' => 'Com Gsglh',
            'com_yyzzdm' => 'Com Yyzzdm',
            'com_yyzz_pic' => 'Com Yyzz Pic',
            'com_zzjgdmz_pic' => 'Com Zzjgdmz Pic',
            'com_sssq' => 'Com Sssq',
            'com_rzdw' => 'Com Rzdw',
            'com_post_code' => '企业邮编',
            'com_mode' => 'Com Mode',
            'com_level' => 'Com Level',
            'com_main_production' => 'Com Main Production',
            'com_main_industry' => 'Com Main Industry',
            'com_main_industry2' => 'Com Main Industry2',
            'com_main_industry3' => 'Com Main Industry3',
            'com_staff_amount_level' => '企业规模',
            'com_turnover_level' => '年营业额',
            'com_type' => '公司性质',
            'com_zbdjg' => 'Com Zbdjg',
            'com_phone' => 'Com Phone',
            'com_fax' => 'Com Fax',
            'com_address_code' => 'Com Address Code',
            'com_address_text' => 'Com Address Text',
            'com_instructions' => '公司简介',
            'create_time' => 'Create Time',
            'com_info_status' => 'Com Info Status',
            'com_money' => 'Com Money',
            'cgrade' => 'Cgrade',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'domain' => 'Domain',
            'owner_name' => 'Owner Name',
            'owner_id' => 'Owner ID',
            'owner_card' => 'Owner Card',
            'credit_value' => 'Credit Value',
            'praise_rate' => 'Praise Rate',
            'close_reason' => 'Close Reason',
            'end_time' => 'End Time',
            'sort_order' => 'Sort Order',
            'recommended' => 'Recommended',
            'com_verify_status' => '审核状态',
            'com_logo' => 'Com Logo',
            'added_s_id' => 'Added S ID',
            'home_page' => 'Home Page',
            'com_email' => '企业邮箱',
            'com_dsdjz' => 'Com Dsdjz',
            'com_dsdjh' => 'Com Dsdjh',
            'com_zjndjzc' => 'Com Zjndjzc',
            'com_zjndjzcfzl' => 'Com Zjndjzcfzl',
            'com_fdctdkfdj' => 'Com Fdctdkfdj',
            'com_fdckfzzzs' => 'Com Fdckfzzzs',
            'com_gdbj' => 'Com Gdbj',
            'com_jsncwbb' => 'Com Jsncwbb',
            'com_source' => 'Com Source',
            'com_main_category' => 'Com Main Category',
            'com_reject_reason' => 'Com Reject Reason',
            'has_store' => 'Has Store',
            'store_level' => '店铺级别',
            'if_pop_window' => 'If Pop Window',
            'contact_man' => '联系人',
            'contact_man_tel' => '联系电话',
            'prov_id' => 'Prov ID',
            'city_id' => 'City ID',
            'dist_id' => 'Dist ID',
            'prov_name' => 'Prov Name',
            'city_name' => 'City Name',
            'dist_name' => 'Dist Name',
            'tag_ids' => '标签',
        ];
    }
    
    public function fields()
    {
    	return [
    		'id' => 'com_id',
    		'gid' => 'group_id',
    		'comm_id' => 'shequ_id',
    		'name' => 'com_name',
    		'short_name' => 'com_short_name',
    		'sn' => 'com_sn',
    		'type' => 'estate_type',
    		'bank' => 'com_bank',
    		'bank_num' => 'com_bank_num',
    		'level' =>'com_level',
    		'main_production' => 'com_main_production',
    		'main_industry' => 'com_main_industry',
    		'main_industry2' => 'com_main_industry2',
    		'main_industry3' => 'com_main_industry3',
    			'com_address_code',
    			'com_address_text',
    			'com_instructions',
    			'create_time',
    			'com_info_status',
    			'com_money',
    			'cgrade',
    			'region_id',
    			'region_name',
    			'domain',
    			'owner_name',
    			'owner_id',
    			'owner_card',
    			'sort_order',
    		'verify_status' => 'com_verify_status',
    		'logo' => 'com_logo',
    			'added_s_id',
    			'home_page',
    		'com_email' => 'com_email',
    			'com_source',
    			'store_level',
    			'contact_man',
    			'contact_man_tel',
    			'prov_id',
    			'city_id',
    			'dist_id',
    			'prov_name',
    			'city_name',
    			'dist_name',
    			'tag_ids',
    	];
    }
    
    public function extraFields()
    {
    	return [
    			'supplier'
    	];
    }
    
    /**
     * 关联Supplier List
     * @date: 2017年10月17日 上午10:11:02
     * @author: cuik
     */
    public function getSupplier()
    {
    	return $this->hasOne(SupplierList::className(), ['id'=>'id'])->where('id=:id',[':id'=>$this->id]);
    }
 
    public function beforeValidate()
    {
    	if(Yii::$app->controller->action->id == 'update'){
    		$this->tag_ids = (isset($this->tag_ids) && is_array($this->tag_ids))?implode(',', $this->tag_ids):"";
    	}
    	return true;
    }
    
    /**
    * 关联 User info ext
    * @date: 2017年12月14日 下午4:38:53
    * @author: cuik
    */
    public function getUserinfoext()
    {
    	return $this->hasOne(UserInfoExt::className(), ['user_id'=>'owner_id']);
    }
    
    public function afterFind()
    {
    	if(Yii::$app->controller->action->id == 'update'){
    		$this->tag_ids = isset($this->tag_ids)?explode(',', $this->tag_ids):"";
    	}
    } 
}
