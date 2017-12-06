<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_direct_sales".
 *
 * @property integer $id
 * @property string $jiafang_name
 * @property string $yifang_name
 * @property string $project_name
 * @property string $product_name
 * @property string $project_amount
 * @property string $create_time
 * @property integer $is_show
 * @property integer $sort
 */
class DirectSales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_direct_sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'is_show', 'sort'], 'integer'],
            [['jiafang_name', 'yifang_name'], 'string', 'max' => 90],
            [['project_name', 'product_name'], 'string', 'max' => 60],
            [['project_amount'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jiafang_name' => 'Jiafang Name',
            'yifang_name' => 'Yifang Name',
            'project_name' => 'Project Name',
            'product_name' => 'Product Name',
            'project_amount' => 'Project Amount',
            'create_time' => 'Create Time',
            'is_show' => 'Is Show',
            'sort' => 'Sort',
        ];
    }
}
