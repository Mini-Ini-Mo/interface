<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%xcpt_region}}".
 *
 * @property string $id
 * @property string $name
 * @property string $pid
 * @property integer $sort
 * @property integer $area_id
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%xcpt_region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'sort', 'area_id'], 'integer'],
            [['area_id'], 'required'],
            [['name'], 'string', 'max' => 100],
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
            'area_id' => 'Area ID',
        ];
    }
}
