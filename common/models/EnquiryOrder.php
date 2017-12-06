<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%xcpt_enquiry_order}}".
 *
 * @property integer $id
 * @property integer $cate_id1
 * @property integer $cate_id2
 * @property string $cate_id
 * @property string $brand_ids
 * @property string $brand_names
 * @property string $params
 * @property string $img
 * @property integer $pro_id
 * @property string $number
 * @property string $unit
 * @property string $caigou_time
 * @property string $pay_type
 * @property integer $fabao_type
 * @property string $contact_name
 * @property string $mobile
 * @property string $other_remark
 * @property integer $contact_is_open
 * @property integer $status
 * @property integer $fenpei_status
 * @property string $fenpei_by_user_id
 * @property string $fenpei_to_group_id
 * @property string $fenpei_to_user_id
 * @property string $fenpei_time
 * @property integer $customer_journey
 * @property integer $deal_level
 * @property integer $deal_user_id
 * @property string $uid
 * @property string $cid
 * @property string $baojia_num
 * @property string $create_time
 * @property integer $audit
 * @property integer $gystj
 * @property integer $cgcpbj
 * @property string $pricing
 * @property string $enable
 */
class EnquiryOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%xcpt_enquiry_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id1', 'cate_id2', 'cate_id', 'pro_id', 'number', 'caigou_time', 'fabao_type', 'contact_is_open', 'status', 'fenpei_status', 'fenpei_by_user_id', 'fenpei_to_group_id', 'fenpei_to_user_id', 'fenpei_time', 'customer_journey', 'deal_level', 'deal_user_id', 'uid', 'cid', 'baojia_num', 'create_time', 'audit', 'gystj', 'cgcpbj'], 'integer'],
            [['brand_names', 'number', 'caigou_time', 'pay_type', 'fabao_type', 'contact_name', 'mobile', 'uid', 'create_time'], 'required'],
            [['params', 'enable'], 'string'],
            [['pricing'], 'number'],
            [['brand_ids', 'brand_names', 'pay_type', 'other_remark'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 200],
            [['unit'], 'string', 'max' => 1],
            [['contact_name'], 'string', 'max' => 30],
            [['mobile'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate_id1' => 'Cate Id1',
            'cate_id2' => 'Cate Id2',
            'cate_id' => 'Cate ID',
            'brand_ids' => 'Brand Ids',
            'brand_names' => 'Brand Names',
            'params' => 'Params',
            'img' => 'Img',
            'pro_id' => 'Pro ID',
            'number' => 'Number',
            'unit' => 'Unit',
            'caigou_time' => 'Caigou Time',
            'pay_type' => 'Pay Type',
            'fabao_type' => 'Fabao Type',
            'contact_name' => 'Contact Name',
            'mobile' => 'Mobile',
            'other_remark' => 'Other Remark',
            'contact_is_open' => 'Contact Is Open',
            'status' => 'Status',
            'fenpei_status' => 'Fenpei Status',
            'fenpei_by_user_id' => 'Fenpei By User ID',
            'fenpei_to_group_id' => 'Fenpei To Group ID',
            'fenpei_to_user_id' => 'Fenpei To User ID',
            'fenpei_time' => 'Fenpei Time',
            'customer_journey' => 'Customer Journey',
            'deal_level' => 'Deal Level',
            'deal_user_id' => 'Deal User ID',
            'uid' => 'Uid',
            'cid' => 'Cid',
            'baojia_num' => 'Baojia Num',
            'create_time' => 'Create Time',
            'audit' => 'Audit',
            'gystj' => 'Gystj',
            'cgcpbj' => 'Cgcpbj',
            'pricing' => 'Pricing',
            'enable' => 'Enable',
        ];
    }
}
