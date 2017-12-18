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

    public $cqname;
    public static $enable_mean = ['禁用','启用'];

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
            [['cqname'],'in','range'=>static::find()->select(['shequ_name'])->column(),'message' => 'Category "{value}" not found.'],
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
            'shequ_name' => '社区',
            'shequ_index_face' => '社区图片',
            'shequ_pinyin' => '拼音',
            'enable' => 'Enable',
            'sort' => '排序',
            'cqid' => '父类',
        	'cqname'=>'父类'
        ];
    }
    
    public function fields(){
    	return [
    			'id' => 'qid', 
    			
    	];
    	
    }

    //用于后台选择父类
    public static function getCommunitySource()
    {
        $tableName = static::tableName();
        return (new \yii\db\Query())
        ->select(['m.qid', 'm.shequ_name', 'parent_name'=>'p.shequ_name'])
        ->from(['m' => $tableName])
        ->leftJoin(['p' => $tableName], '[[m.cqid]]=[[p.qid]]')
        ->all(static::getDb());
    }
}
