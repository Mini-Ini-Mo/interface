<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_ad_position`.
 */
class m171109_071702_create_xcpt_ad_position_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->renameColumn('xcpt_ad_position', 'position_id', 'id');
        $this->renameColumn('xcpt_ad_position', 'position_name', 'name');
        $this->renameColumn('xcpt_ad_position', 'position_desc', 'description');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->renameColumn('xcpt_ad_position', 'id', 'position_id');
        $this->renameColumn('xcpt_ad_position', 'name', 'position_name', 'name');
        $this->renameColumn('xcpt_ad_position', 'description', 'position_desc');
    }
}
