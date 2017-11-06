<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_community".
 *
 * @property string $id
 * @property string $name
 * @property string $cover
 * @property string $spell
 * @property integer $enable
 * @property integer $sort
 * @property integer $pid
 */
class Community extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_community';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'cover', 'spell', 'enable'], 'required'],
            [['enable', 'sort', 'pid'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['cover'], 'string', 'max' => 200],
            [['spell'], 'string', 'max' => 30],
            [['name'], 'unique'],
            [['spell'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'Shequ Name',
            'cover' => 'Shequ Index Face',
            'spell' => 'Shequ Pinyin',
            'enable' => 'Enable',
            'sort' => 'Sort',
            'pid' => 'pid',
        ];
    }
}
