<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_ad_position".
 *
 * @property integer $position_id
 * @property string $position_name
 * @property string $position_desc
 */
class AdPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_ad_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_name'], 'string', 'max' => 32],
            [['position_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
            'position_desc' => 'Position Desc',
        ];
    }
}
