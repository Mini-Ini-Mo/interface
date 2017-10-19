<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_gcategory".
 *
 * @property string $gcate_id
 * @property integer $com_id
 * @property string $gcate_name
 * @property string $parent_id
 * @property string $sort_order
 * @property integer $if_show
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
            [['com_id', 'parent_id', 'sort_order', 'if_show'], 'integer'],
            [['gcate_name'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gcate_id' => 'Gcate ID',
            'com_id' => 'Com ID',
            'gcate_name' => 'Gcate Name',
            'parent_id' => 'Parent ID',
            'sort_order' => 'Sort Order',
            'if_show' => 'If Show',
            'unit' => 'Unit',
        ];
    }
    
    public function fields()
    {
    	return [
    		'gid'=>'gcate_id',
    		'name'=>'gcate_name',
    		'pid'=>'parent_id',
    		'unit',
    	];	
    }
}