<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_ad".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $img
 * @property integer $start_time
 * @property integer $end_time
 * @property string $click_count
 * @property string $price
 * @property integer $enable
 * @property integer $add_time
 * @property integer $position_id
 * @property integer $sort
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_time', 'end_time', 'click_count', 'enable', 'add_time', 'position_id', 'sort'], 'integer'],
            [['price'], 'number'],
            [['add_time'], 'required'],
            [['name'], 'string', 'max' => 60],
            [['link', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ad ID',
            'name' => 'Ad Name',
            'link' => 'Ad Link',
            'img' => 'Ad Img',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'click_count' => 'Click Count',
            'price' => 'Ad Price',
            'enable' => 'enable',
            'add_time' => 'Add Time',
            'position_id' => 'Position ID',
            'sort' => 'Sort Order',
        ];
    }
}
