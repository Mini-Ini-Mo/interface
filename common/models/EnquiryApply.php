<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_enquiry_apply".
 *
 * @property string $id
 * @property string $oid
 * @property integer $create_by_user_id
 * @property integer $create_by_com_id
 * @property string $unit_price
 * @property string $pay_type
 * @property string $description
 * @property integer $is_need_communicate
 * @property integer $create_time
 * @property integer $is_read
 */
class EnquiryApply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_enquiry_apply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oid', 'create_by_user_id', 'unit_price', 'pay_type', 'create_time'], 'required'],
            [['oid', 'create_by_user_id', 'create_by_com_id', 'is_need_communicate', 'create_time', 'is_read'], 'integer'],
            [['unit_price'], 'number'],
            [['description'], 'string'],
            [['pay_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oid' => 'Oid',
            'create_by_user_id' => 'Create By User ID',
            'create_by_com_id' => 'Create By Com ID',
            'unit_price' => 'Unit Price',
            'pay_type' => 'Pay Type',
            'description' => 'Description',
            'is_need_communicate' => 'Is Need Communicate',
            'create_time' => 'Create Time',
            'is_read' => 'Is Read',
        ];
    }
}
