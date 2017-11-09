<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_enquiry_attribute`.
 */
class m171109_080402_create_xcpt_enquiry_attribute_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->renameTable('xcpt_xjzc_attribute', 'xcpt_enquriy_attribute');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('xcpt_enquiry_attribute');
    }
}
