<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_custom_goods_img".
 *
 * @property integer $id
 * @property integer $goods_id
 * @property string $file_path
 * @property string $thumb_path
 * @property integer $sort
 * @property integer $desc
 * @property integer $create_time
 */
class CustomGoodsImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_custom_goods_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'file_path', 'thumb_path'], 'required'],
            [['goods_id', 'sort', 'desc', 'create_time'], 'integer'],
            [['file_path', 'thumb_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'file_path' => 'File Path',
            'thumb_path' => 'Thumb Path',
            'sort' => 'Sort',
            'desc' => 'Desc',
            'create_time' => 'Create Time',
        ];
    }
}
