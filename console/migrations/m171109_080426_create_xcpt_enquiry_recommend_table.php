<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_enquiry_recommend`.
 */
class m171109_080426_create_xcpt_enquiry_recommend_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->renameTable('xcpt_xjzc_tj', 'xcpt_enquiry_recommend');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('xcpt_enquiry_recommend');
    }
}
