<?php

namespace api\models;

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
 */
class Company extends \yii\db\ActiveRecord
{
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
            [['group_id', 'shequ_id', 'estate_type', 'com_sssq', 'com_mode', 'com_level', 'com_staff_amount_level', 'com_turnover_level', 'com_type', 'com_zbdjg', 'create_time', 'com_info_status', 'cgrade', 'region_id', 'owner_id', 'credit_value', 'end_time', 'sort_order', 'recommended', 'com_verify_status', 'has_store', 'store_level', 'if_pop_window'], 'integer'],
            [['com_instructions'], 'string'],
            [['com_money', 'praise_rate'], 'number'],
            [['com_name', 'com_address_code', 'region_name'], 'string', 'max' => 100],
            [['com_short_name', 'com_bank_num', 'com_zczj', 'com_fddbr', 'com_fddbr_dh', 'com_zzjgdm', 'com_gsglh', 'com_yyzzdm', 'com_fax'], 'string', 'max' => 20],
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
            'group_id' => 'Group ID',
            'shequ_id' => 'Shequ ID',
            'com_name' => 'Com Name',
            'com_short_name' => 'Com Short Name',
            'com_sn' => 'Com Sn',
            'estate_type' => 'Estate Type',
            'com_bank' => 'Com Bank',
            'com_bank_num' => 'Com Bank Num',
            'com_zczj' => 'Com Zczj',
            'com_fddbr' => 'Com Fddbr',
            'com_fddbr_dh' => 'Com Fddbr Dh',
            'com_zzjgdm' => 'Com Zzjgdm',
            'com_gsglh' => 'Com Gsglh',
            'com_yyzzdm' => 'Com Yyzzdm',
            'com_yyzz_pic' => 'Com Yyzz Pic',
            'com_zzjgdmz_pic' => 'Com Zzjgdmz Pic',
            'com_sssq' => 'Com Sssq',
            'com_rzdw' => 'Com Rzdw',
            'com_post_code' => 'Com Post Code',
            'com_mode' => 'Com Mode',
            'com_level' => 'Com Level',
            'com_main_production' => 'Com Main Production',
            'com_main_industry' => 'Com Main Industry',
            'com_main_industry2' => 'Com Main Industry2',
            'com_main_industry3' => 'Com Main Industry3',
            'com_staff_amount_level' => 'Com Staff Amount Level',
            'com_turnover_level' => 'Com Turnover Level',
            'com_type' => 'Com Type',
            'com_zbdjg' => 'Com Zbdjg',
            'com_phone' => 'Com Phone',
            'com_fax' => 'Com Fax',
            'com_address_code' => 'Com Address Code',
            'com_address_text' => 'Com Address Text',
            'com_instructions' => 'Com Instructions',
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
            'com_verify_status' => 'Com Verify Status',
            'com_logo' => 'Com Logo',
            'added_s_id' => 'Added S ID',
            'home_page' => 'Home Page',
            'com_email' => 'Com Email',
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
            'store_level' => 'Store Level',
            'if_pop_window' => 'If Pop Window',
            'contact_man' => 'Contact Man',
            'contact_man_tel' => 'Contact Man Tel',
        ];
    }
    
    public function fields()
    {
    	return [
    		'cid'=>'com_id',
    		'com_name'=>'com_name',
    		'store_level'=>'store_level',
    		'gid'=>'group_id',
    		'contact_tel'=>'contact_man_tel',
    		'contact_man'=>'contact_man',
    		'com_source'=>'com_source',
    		'com_email'=>'com_email',
    		'com_verify_status'=>'com_verify_status',
    		'owner_id'=>'owner_id',
    		'com_logo'=>'com_logo',
    		'com_instructions'=>'com_instructions',
    		'com_phone'=>'com_phone',
    		'com_main_production'=>'com_main_production',
    	];
    }
    
    public function extraFields()
    {
    	return [
    		'supplier'	
    	];
    }
    
    /**
    * Supplier List
    * @date: 2017年10月17日 上午10:11:02
    * @author: cuik
    */
    public function getSupplier()
    {
    	return $this->hasOne(SupplierList::className(), ['com_id'=>'com_id'])->where('com_id=:cid',[':cid'=>$this->com_id]);	
    }
}
