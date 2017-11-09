<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%xcpt_category}}".
 *
 * @property string $id
 * @property string $name
 * @property string $pid
 * @property string $sort
 * @property integer $is_show
 * @property string $unit
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%xcpt_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'sort', 'is_show'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pid' => 'Pid',
            'sort' => 'Sort',
            'is_show' => 'Is Show',
            'unit' => 'Unit',
        ];
    }
}
