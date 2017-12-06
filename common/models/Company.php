<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_company".
 *
 * @property string $id
 * @property integer $gid
 * @property integer $shequ_id
 * @property string $name
 * @property string $short_name
 * @property string $sn
 * @property integer $estate_type
 * @property string $bank
 * @property string $bank_num
 * @property string $zczj
 * @property string $fddbr
 * @property string $fddbr_dh
 * @property string $zzjgdm
 * @property string $com_gsglh
 * @property string $com_yyzzdm
 * @property string $com_yyzz_pic
 * @property string $zzjgdmz_pic
 * @property integer $sssq
 * @property string $rzdw
 * @property string $post_code
 * @property integer $mode
 * @property integer $level
 * @property string $main_production
 * @property string $main_industry
 * @property string $main_industry2
 * @property string $main_industry3
 * @property integer $staff_amount_level
 * @property integer $turnover_level
 * @property integer $type
 * @property integer $zbdjg
 * @property string $phone
 * @property string $fax
 * @property string $address_code
 * @property string $address_text
 * @property string $instructions
 * @property integer $create_time
 * @property integer $info_status
 * @property string $money
 * @property integer $cgrade
 * @property integer $region_id
 * @property string $region_name
 * @property string $domain
 * @property string $owner_name
 * @property integer $uid
 * @property string $owner_card
 * @property integer $credit_value
 * @property string $praise_rate
 * @property string $close_reason
 * @property integer $end_time
 * @property integer $sort_order
 * @property integer $recommended
 * @property integer $verify_status
 * @property string $logo
 * @property string $added_s_id
 * @property string $home_page
 * @property string $email
 * @property string $dsdjz
 * @property string $dsdjh
 * @property string $zjndjzc
 * @property string $zjndjzcfzl
 * @property string $fdctdkfdj
 * @property string $fdckfzzzs
 * @property string $gdbj
 * @property string $jsncwbb
 * @property string $source
 * @property string $com_source
 * @property string $reject_reason
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
            [['gid', 'create_time', 'uid'], 'required'],
            [['gid', 'shequ_id', 'estate_type', 'sssq', 'mode', 'level', 'staff_amount_level', 'turnover_level', 'type', 'zbdjg', 'create_time', 'info_status', 'cgrade', 'region_id', 'uid', 'credit_value', 'end_time', 'sort_order', 'recommended', 'verify_status', 'has_store', 'store_level', 'if_pop_window'], 'integer'],
            [['instructions'], 'string'],
            [['money', 'praise_rate'], 'number'],
            [['name', 'address_code', 'region_name'], 'string', 'max' => 100],
            [['short_name', 'bank_num', 'zczj', 'fddbr', 'fddbr_dh', 'zzjgdm', 'com_gsglh', 'com_yyzzdm', 'fax'], 'string', 'max' => 20],
            [['sn'], 'string', 'max' => 30],
            [['bank', 'com_yyzz_pic', 'zzjgdmz_pic', 'main_industry3', 'close_reason', 'logo', 'added_s_id', 'email', 'dsdjz', 'jsncwbb', 'com_source', 'reject_reason'], 'string', 'max' => 255],
            [['rzdw', 'dsdjh', 'zjndjzc', 'zjndjzcfzl', 'fdctdkfdj', 'fdckfzzzs', 'gdbj'], 'string', 'max' => 50],
            [['post_code'], 'string', 'max' => 10],
            [['main_production', 'main_industry', 'main_industry2', 'domain', 'owner_name', 'owner_card', 'source'], 'string', 'max' => 60],
            [['phone', 'contact_man'], 'string', 'max' => 32],
            [['address_text', 'home_page'], 'string', 'max' => 200],
            [['contact_man_tel'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Com ID',
            'gid' => 'Group ID',
            'shequ_id' => 'Shequ ID',
            'name' => 'Com Name',
            'short_name' => 'Com Short Name',
            'sn' => 'Com Sn',
            'estate_type' => 'Estate Type',
            'bank' => 'Com Bank',
            'bank_num' => 'Com Bank Num',
            'zczj' => 'Com Zczj',
            'fddbr' => 'Com Fddbr',
            'fddbr_dh' => 'Com Fddbr Dh',
            'zzjgdm' => 'Com Zzjgdm',
            'com_gsglh' => 'Com Gsglh',
            'com_yyzzdm' => 'Com Yyzzdm',
            'com_yyzz_pic' => 'Com Yyzz Pic',
            'zzjgdmz_pic' => 'Com Zzjgdmz Pic',
            'sssq' => 'Com Sssq',
            'rzdw' => 'Com Rzdw',
            'post_code' => 'Com Post Code',
            'mode' => 'Com Mode',
            'level' => 'Com Level',
            'main_production' => 'Com Main Production',
            'main_industry' => 'Com Main Industry',
            'main_industry2' => 'Com Main Industry2',
            'main_industry3' => 'Com Main Industry3',
            'staff_amount_level' => 'Com Staff Amount Level',
            'turnover_level' => 'Com Turnover Level',
            'type' => 'Com Type',
            'zbdjg' => 'Com Zbdjg',
            'phone' => 'Com Phone',
            'fax' => 'Com Fax',
            'address_code' => 'Com Address Code',
            'address_text' => 'Com Address Text',
            'instructions' => 'Com Instructions',
            'create_time' => 'Create Time',
            'info_status' => 'Com Info Status',
            'money' => 'Com Money',
            'cgrade' => 'Cgrade',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'domain' => 'Domain',
            'owner_name' => 'Owner Name',
            'uid' => 'Owner ID',
            'owner_card' => 'Owner Card',
            'credit_value' => 'Credit Value',
            'praise_rate' => 'Praise Rate',
            'close_reason' => 'Close Reason',
            'end_time' => 'End Time',
            'sort_order' => 'Sort Order',
            'recommended' => 'Recommended',
            'verify_status' => 'Com Verify Status',
            'logo' => 'Com Logo',
            'added_s_id' => 'Added S ID',
            'home_page' => 'Home Page',
            'email' => 'Com Email',
            'dsdjz' => 'Com Dsdjz',
            'dsdjh' => 'Com Dsdjh',
            'zjndjzc' => 'Com Zjndjzc',
            'zjndjzcfzl' => 'Com Zjndjzcfzl',
            'fdctdkfdj' => 'Com Fdctdkfdj',
            'fdckfzzzs' => 'Com Fdckfzzzs',
            'gdbj' => 'Com Gdbj',
            'jsncwbb' => 'Com Jsncwbb',
            'source' => 'Com Source',
            'com_source' => 'Com Main Category',
            'reject_reason' => 'Com Reject Reason',
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
    		'id'=>'id',
    		'name'=>'name',
    		'store_level'=>'store_level',
    		'gid'=>'gid',
    		'contact_tel'=>'contact_man_tel',
    		'contact_man'=>'contact_man',
    		'source'=>'source',
    		'email'=>'email',
    		'verify_status'=>'verify_status',
    		'uid'=>'uid',
    		'logo'=>'logo',
    		'instructions'=>'instructions',
    		'phone'=>'phone',
    		'main_production'=>'main_production',
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
    	return $this->hasOne(SupplierList::className(), ['id'=>'id'])->where('id=:id',[':id'=>$this->id]);	
    }
}
