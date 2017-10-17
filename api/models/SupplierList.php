<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_supplier_list".
 *
 * @property string $supplier_id
 * @property integer $com_id
 * @property string $com_name
 * @property string $com_zzjgdm
 * @property integer $com_type
 * @property integer $com_mode
 * @property integer $staff_amount_level
 * @property integer $turnover_level
 * @property string $com_main_industry
 * @property string $com_main_industry2
 * @property string $com_main_industry3
 * @property string $com_main_production
 * @property string $region_id
 * @property string $region_id2
 * @property string $region_id3
 * @property string $com_address_text
 * @property integer $com_tag1
 * @property integer $com_tag2
 * @property integer $com_tag3
 * @property string $tag_ext
 * @property string $com_logo
 * @property string $com_src
 * @property string $contact_man
 * @property string $contact_man_tel
 * @property string $create_time
 * @property string $sort_order
 * @property string $view_count
 * @property integer $if_show
 */
class SupplierList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_supplier_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id', 'com_type', 'com_mode', 'staff_amount_level', 'turnover_level', 'region_id', 'region_id2', 'region_id3', 'com_tag1', 'com_tag2', 'com_tag3', 'create_time', 'sort_order', 'view_count', 'if_show'], 'integer'],
            [['com_mode'], 'required'],
            [['com_name', 'com_main_industry2', 'com_main_industry3', 'com_main_production', 'com_address_text', 'tag_ext', 'com_logo'], 'string', 'max' => 255],
            [['com_zzjgdm', 'com_main_industry'], 'string', 'max' => 64],
            [['com_src', 'contact_man'], 'string', 'max' => 32],
            [['contact_man_tel'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'com_id' => 'Com ID',
            'com_name' => 'Com Name',
            'com_zzjgdm' => 'Com Zzjgdm',
            'com_type' => 'Com Type',
            'com_mode' => 'Com Mode',
            'staff_amount_level' => 'Staff Amount Level',
            'turnover_level' => 'Turnover Level',
            'com_main_industry' => 'Com Main Industry',
            'com_main_industry2' => 'Com Main Industry2',
            'com_main_industry3' => 'Com Main Industry3',
            'com_main_production' => 'Com Main Production',
            'region_id' => 'Region ID',
            'region_id2' => 'Region Id2',
            'region_id3' => 'Region Id3',
            'com_address_text' => 'Com Address Text',
            'com_tag1' => 'Com Tag1',
            'com_tag2' => 'Com Tag2',
            'com_tag3' => 'Com Tag3',
            'tag_ext' => 'Tag Ext',
            'com_logo' => 'Com Logo',
            'com_src' => 'Com Src',
            'contact_man' => 'Contact Man',
            'contact_man_tel' => 'Contact Man Tel',
            'create_time' => 'Create Time',
            'sort_order' => 'Sort Order',
            'view_count' => 'View Count',
            'if_show' => 'If Show',
        ];
    }
    
    public function fields()
    {
    	return [
    		'supplier_id' => 'supplier_id',
    		'com_id' => 'com_id',
    		'com_name' => 'com_name',
    		'com_zzjgdm' => 'com_zzjgdm',
    		'com_type' => 'com_type',
    		'com_mode' => 'com_mode',
    		'staff_amount_level' => 'staff_amount_level',
    		'turnover_level' => 'turnover_level',
    		'com_tag1' => 'com_tag1',
    		'com_tag2' => 'com_tag2',
    		'com_tag3' => 'com_tag3',
    		'com_logo' => 'com_logo',
    		'com_src' => 'com_src',
    		'if_show' => 'if_show',
    	];
    }
}
