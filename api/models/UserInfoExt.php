<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "xcpt_user_info_ext".
 *
 * @property string $id
 * @property string $uid
 * @property string $tag_ids
 * @property string $comm_ids
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property integer $create_time
 */
class UserInfoExt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_user_info_ext';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'create_time'], 'integer'],
            [['tag_ids'], 'string', 'max' => 100],
            [['ext1', 'ext2', 'ext3','comm_ids'], 'string', 'max' => 255],
            [['uid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'User ID',
            'tag_ids' => 'Tag Ids',
            'comm_ids' => 'Shequ ID',
            'ext1' => 'Ext1',
            'ext2' => 'Ext2',
            'ext3' => 'Ext3',
            'create_time' => 'Create Time',
        ];
    }
    
    public function fields()
    {
    	return [
    		'id' => 'comm_ids',
    		'tag' => 'tag_ids',
    		'uid'=>'uid',
    	];
    }
}
