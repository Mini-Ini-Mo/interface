<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_ad".
 *
 * @property integer $ad_id
 * @property string $ad_name
 * @property string $ad_link
 * @property string $ad_img
 * @property integer $start_time
 * @property integer $end_time
 * @property string $click_count
 * @property string $ad_price
 * @property integer $enabled
 * @property integer $add_time
 * @property integer $position_id
 * @property integer $sort_order
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
            [['start_time', 'end_time', 'click_count', 'enabled', 'add_time', 'position_id', 'sort_order'], 'integer'],
            [['ad_price'], 'number'],
            [['add_time'], 'required'],
            [['ad_name'], 'string', 'max' => 60],
            [['ad_link', 'ad_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_id' => 'Ad ID',
            'ad_name' => 'Ad Name',
            'ad_link' => 'Ad Link',
            'ad_img' => 'Ad Img',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'click_count' => 'Click Count',
            'ad_price' => 'Ad Price',
            'enabled' => 'Enabled',
            'add_time' => 'Add Time',
            'position_id' => 'Position ID',
            'sort_order' => 'Sort Order',
        ];
    }
}
