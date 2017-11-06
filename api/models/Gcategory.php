<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_gcategory".
 *
 * @property string $id
 * @property string $name
 * @property string $pid
 * @property string $sort
 * @property integer $is_show
 * @property string $unit
 */
class Gcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_gcategory';
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
            'id' => 'Gcate ID',
            'name' => 'Gcate Name',
            'pid' => 'Parent ID',
            'sort' => 'Sort Order',
            'is_show' => 'If Show',
            'unit' => 'Unit',
        ];
    }
    
    public function fields()
    {
    	return [
    		'gid'=>'id',
    		'name'=>'name',
    		'pid'=>'pid',
    		'unit',
    	];	
    }
}
