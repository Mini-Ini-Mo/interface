<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_user_info_ext".
 *
 * @property string $id
 * @property string $user_id
 * @property string $tag_ids
 * @property string $shequ_id
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
            [['user_id', 'shequ_id', 'create_time'], 'integer'],
            [['tag_ids'], 'string', 'max' => 100],
            [['ext1', 'ext2', 'ext3'], 'string', 'max' => 255],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'tag_ids' => 'Tag Ids',
            'shequ_id' => 'Shequ ID',
            'ext1' => 'Ext1',
            'ext2' => 'Ext2',
            'ext3' => 'Ext3',
            'create_time' => 'Create Time',
        ];
    }
}
