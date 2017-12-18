<?php

namespace common\models;

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
class Category extends \yii\db\ActiveRecord
{
	public $parent_name;
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
        	[['parent_name'], 'in',
        		'range' => static::find()->select(['gcate_name'])->column(),
        		'message' => 'Category "{value}" not found.'],
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
            'gcate_id' => 'ID',
            'com_id' => 'Com ID',
            'gcate_name' => '品类',
            'parent_id' => '父类',
            'sort_order' => '排序',
            'if_show' => '是否显示',
            'unit' => '单位',
        ];
    }
    
    /**
    * 重名字段
    * @date: 2017年12月6日 下午3:05:44
    * @author: cuik
    */
    public function fields()
    {
    	return [
    		'id' => 'gcate_id',	
    		'cid' => 'com_id',
    		'name' => 'gcate_name',
    		'pid' => 'parent_id',
    		'sort' => 'sort_order',
    		'is_show' => 'if_show',
    		'unit'
    	];
    }
    
    //用于后台选择父类
    public static function getCategorySource()
    {
    	$tableName = static::tableName();
    	return (new \yii\db\Query())
    	->select(['m.gcate_id', 'm.gcate_name', 'parent_name'=>'p.gcate_name'])
    	->from(['m' => $tableName])
    	->leftJoin(['p' => $tableName], '[[m.parent_id]]=[[p.gcate_id]]')
    	->all(static::getDb());
    }
}
