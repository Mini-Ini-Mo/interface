<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_shequ".
 *
 * @property string $qid
 * @property string $shequ_name
 * @property string $shequ_index_face
 * @property string $shequ_pinyin
 * @property integer $enable
 * @property integer $sort
 * @property integer $cqid
 */
class Community extends \yii\db\ActiveRecord
{
	public static $enable_mean = [0=>'启用',1=>'禁用'];
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_shequ';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shequ_name', 'shequ_index_face', 'shequ_pinyin', 'enable'], 'required'],
            [['enable', 'sort', 'cqid'], 'integer'],
            [['shequ_name'], 'string', 'max' => 60],
            [['shequ_index_face'], 'string', 'max' => 200],
            [['shequ_pinyin'], 'string', 'max' => 30],
            [['shequ_name'], 'unique'],
            [['shequ_pinyin'], 'unique'],
        	[['enable'],'in','range'=>[0,1]]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qid' => 'Qid',
            'shequ_name' => 'Shequ Name',
            'shequ_index_face' => 'Shequ Index Face',
            'shequ_pinyin' => 'Shequ Pinyin',
            'enable' => 'Enable',
            'sort' => 'Sort',
            'cqid' => 'Cqid',
        ];
    }
    
    public function fields(){
    	return [
    			'id' => 'qid', 
    			
    	];
    	
    }
}
