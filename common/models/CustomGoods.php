<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_custom_goods".
 *
 * @property string $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property string $default_image
 * @property string $thumb_path
 * @property integer $cate_id1
 * @property integer $cate_id2
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $unit
 * @property string $market_price
 * @property string $hangye_price
 * @property string $goods_model
 * @property string $ad_words
 * @property string $number_low
 * @property string $price_desc
 * @property string $duibiao
 * @property string $yufukuan
 * @property string $daohuokuan
 * @property string $wanchengkuan
 * @property string $jiesuankuan
 * @property string $baozhengjin
 * @property string $params
 * @property string $fuwushang
 * @property string $zhanluekehu
 * @property string $description
 * @property integer $recommend_to_pc
 * @property integer $recommend_to_app
 * @property integer $status
 * @property integer $user_id
 * @property integer $sort
 * @property integer $is_delete
 * @property integer $pc_view_num
 * @property integer $app_view_num
 * @property string $total_view_num
 * @property integer $add_time
 */
class CustomGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_custom_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id1', 'cate_id2', 'cate_id', 'brand_id', 'unit', 'goods_model', 'ad_words', 'description'], 'required'],
            [['cate_id1', 'cate_id2', 'cate_id', 'brand_id', 'recommend_to_pc', 'recommend_to_app', 'status', 'user_id', 'sort', 'is_delete', 'pc_view_num', 'app_view_num', 'total_view_num', 'add_time'], 'integer'],
            [['market_price'], 'number'],
            [['params', 'fuwushang', 'zhanluekehu', 'description'], 'string'],
            [['goods_name'], 'string', 'max' => 64],
            [['goods_sn', 'cate_name'], 'string', 'max' => 32],
            [['default_image'], 'string', 'max' => 150],
            [['thumb_path', 'hangye_price', 'ad_words', 'price_desc'], 'string', 'max' => 255],
            [['brand_name'], 'string', 'max' => 16],
            [['unit'], 'string', 'max' => 30],
            [['goods_model'], 'string', 'max' => 90],
            [['number_low'], 'string', 'max' => 100],
            [['duibiao', 'yufukuan', 'daohuokuan', 'wanchengkuan', 'jiesuankuan', 'baozhengjin'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_sn' => 'Goods Sn',
            'default_image' => 'Default Image',
            'thumb_path' => 'Thumb Path',
            'cate_id1' => 'Cate Id1',
            'cate_id2' => 'Cate Id2',
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'brand_id' => 'Brand ID',
            'brand_name' => 'Brand Name',
            'unit' => 'Unit',
            'market_price' => 'Market Price',
            'hangye_price' => 'Hangye Price',
            'goods_model' => 'Goods Model',
            'ad_words' => 'Ad Words',
            'number_low' => 'Number Low',
            'price_desc' => 'Price Desc',
            'duibiao' => 'Duibiao',
            'yufukuan' => 'Yufukuan',
            'daohuokuan' => 'Daohuokuan',
            'wanchengkuan' => 'Wanchengkuan',
            'jiesuankuan' => 'Jiesuankuan',
            'baozhengjin' => 'Baozhengjin',
            'params' => 'Params',
            'fuwushang' => 'Fuwushang',
            'zhanluekehu' => 'Zhanluekehu',
            'description' => 'Description',
            'recommend_to_pc' => 'Recommend To Pc',
            'recommend_to_app' => 'Recommend To App',
            'status' => 'Status',
            'user_id' => 'User ID',
            'sort' => 'Sort',
            'is_delete' => 'Is Delete',
            'pc_view_num' => 'Pc View Num',
            'app_view_num' => 'App View Num',
            'total_view_num' => 'Total View Num',
            'add_time' => 'Add Time',
        ];
    }
}
