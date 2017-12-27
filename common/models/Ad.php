<?php

namespace common\models;

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
	public static $enabled_mean = ['禁用','启用'];
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
            'ad_name' => '名称',
            'ad_link' => '链接',
            'ad_img' => '图片',
            'start_time' => '开始时间',
            'end_time' => '结束时间',
            'click_count' => '点击次数',
            'ad_price' => '点击价格',
            'enabled' => '状态',
            'add_time' => '添加时间',
            'position_id' => '父类',
            'sort_order' => '排序',
        ];
    }
}
