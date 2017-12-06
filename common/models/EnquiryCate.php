<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_enquiry_cate".
 *
 * @property string $cate_id
 * @property string $cate_name
 * @property string $cate_id1
 * @property string $cate_id2
 * @property string $icon
 * @property string $brand_ids
 * @property string $user_id
 * @property integer $sort
 * @property string $create_time
 */
class EnquiryCate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_enquiry_cate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'cate_name', 'cate_id1', 'cate_id2', 'icon', 'brand_ids', 'user_id', 'create_time'], 'required'],
            [['cate_id', 'cate_id1', 'cate_id2', 'user_id', 'sort', 'create_time'], 'integer'],
            [['brand_ids'], 'string'],
            [['cate_name'], 'string', 'max' => 60],
            [['icon'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'cate_id1' => 'Cate Id1',
            'cate_id2' => 'Cate Id2',
            'icon' => 'Icon',
            'brand_ids' => 'Brand Ids',
            'user_id' => 'User ID',
            'sort' => 'Sort',
            'create_time' => 'Create Time',
        ];
    }
}
