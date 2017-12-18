<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_upload_file".
 *
 * @property integer $id
 * @property string $file
 * @property string $status
 * @property integer $created_at
 * @property string $type
 */
class UploadFile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_upload_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'integer'],
            [['file', 'status'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
            'status' => 'Status',
            'created_at' => 'Created At',
            'type' => 'Type',
        ];
    }
}
